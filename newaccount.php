<?php
include "includes/header.php";
require_once "includes/dbh.php";
require_once "includes/db-functions.php";

  
?>
   
<body>

  <div class="container">
   <h1>Create account</h1>
   <div class="signin">
   <?php
    //  print_r($_POST);
    if(isset($_POST["submit"]))
    {
      // print_r($_PODT['submit']);
      //store the data into the varibles
      $username = $_POST["username"];
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $dateofb = $_POST["dob"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $passwordconf = $_POST["confpassword"];

      //has password
      $passwordhash = password_hash($password,PASSWORD_DEFAULT);
      //error checks if there is an empty value
      $errors = array();
      if(empty( $username) OR empty($firstname) OR  empty($lastname ) OR empty($dateofb) OR  empty($email ) OR empty( $password)  
      OR empty($passwordconf))
      {
        //if an empty field show this error to the user
        array_push($errors,"All field needs are required");

      }
      //if the password is written the same
      if($password!==$passwordconf)
      {
        array_push($errors,"Password dont match");
      }

      //check if the email is valid
      if(!filter_var( $email,FILTER_DEFAULT))
      {
        array_push($errors,"email is not valid");
      }

      //check if the user enters the same email address
      $sql = "SELECT * FROM newaccount WHERE email = '$email'";
      $result =  mysqli_query($conn,$sql);
      $rowCount = mysqli_num_rows( $result);
      if($rowCount >0)
      {
        //push the first argument
        array_push($errors,"Email already used pls use another email");
      }
    
      //check the array count so we can insert the data
      if(count($errors)>0)
      {
        foreach($errors as $error)
        {
        
         echo "<div class='alert alert-danger'> $error </div>";
        //not shwoing error messages
       // header("location:index.php?error=invalidUsername");
      
         
        }

      }else

      {
        //we will insert the data in the db
        $sql = "INSERT INTO  newaccount (username,firstname,LastName,email,password,dob) VALUES ( ?, ?, ?, ?, ?, ? )";
          //connect the varible
         $stmt = mysqli_stmt_init($conn);
        //the statment object and the 
         $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
         //if true start adding the values
         if($prepareStmt)
         {
          mysqli_stmt_bind_param($stmt,"ssssss",$username,$firstname,$lastname,$email,$passwordhash,$dateofb);
          mysqli_stmt_execute($stmt);
          echo "registered succesefully";
          header("location:index.php");

         }else
         {
          die("Something is wrong");
         }
        
        
      }

    }
      ?>
   
    <form action="newaccount.php" method="post">
      <div class="imgconatiner">
        <img src="images/profile.png" alt="avatar">
      </div>

     
      <label for="username"><br>Username</label>
      <input type="text"   id="username" name="username"  >
      <br>

      

      <label for="Name"><br>name</label>
      <input type="text"  id="fullName"  name="firstname" >
      <br>

      

      <label for="Surname"><br>surname</label>
      <input type="text"   id="LastName"   name="lastname" >
      <br>

      <label for="Dob"><br>date of bith</label>
      <input type="date" class="form-control" id="Dob"  name="dob" >
      <br>

    
      <label for="email"><br>email</label>
      <input type="email"  class="form-control" id="email" name="email" >
      

      <label for="password"><br>password</label>
      <input type="password" class="form-control" id="confPassword" name="password" >
      <br>

      <label for="password"><br> Repeat  password</label>
      <input type="password" class="form-control" id="confPassword" name="confpassword" >
      <br>
      
     
      
      <input type="submit" value ="register" name="submit">
   
      
    </form>
   </div>  

    


 

</body>
<?php
include "includes/footer.php";
?>


</html>
