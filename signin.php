<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>



<body>

  <div class="container">
   <h1>Sign in</h1>
   <div class="signin">
    <?php
    //check if button clicked collect the data
    if(isset($POST["login"]))
    {
      $email = $_POST["email"];
      $password = $_POST["password"];
      //connect to database
      //search if the enai, provided is stored inj the databse 
      $sql = "SELECT * FROM newaccount WHERE email = '$email'";
      //return an object 
      $result = mysqli_query($conn,$sql);
      //convert resutl into an array
      $user = $mysqli_fetch_array($result,MYSQLI_ASSOC);
      if($user)
      {
        //if email exsists
        if(password_verify($password, $user["password"]))
        {
          session_start();
         // $_SESSION["user"] = "yes";
          //takt the user to the welcoome screen
          header("Location: index.php");
          die();
        }
        else
        {
          echo "password doen not match";

        }
      }else
      {
        echo "email dosen not exsist create new account";
      }

    }

    ?>
   
    <form action="signin.php" method="post">
      <div class="imgconatiner">
        <img src="images/profile.png" alt="avatar">
      </div>

      <label for="email"><br>email</label>
      <input type="email"  name="email"  >
      <br>

      <label for="password"><br>password</label>
      <input type="password" name="password" >
      <br>
      
      <input type = "submit" value ="Login" name="login">

    <!--  <button type="submit">Login</button-->
      <!--we can do the code of the button-->
     
      <button  onclick ="location.href='editd.php';">Edit account details</button>
 
    </form>

    <h4>New to our website click here to create an account in a few seconds</h4>
      
      <button  onclick ="location.href='newaccount.php';">Create new account</button>
    
     <!-- <a href = "newaccount.php";>-->
   </div>  
</div>

<?php
include "includes/footer.php";
?>
