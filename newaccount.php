<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>
   

<body>

  <div class="container">
   <h1>Create account</h1>
   <div class="signin">
   
    <form action="" method="post">
      <div class="imgconatiner">
        <img src="images/profile.png" alt="avatar">
      </div>

      <label for="username"><br>Username</label>
      <input type="text"  name="username" required>
      <br>

      <label for="Name"><br>name</label>
      <input type="text"  name="Name" required>
      <br>

      <label for="Surname"><br>surname</label>
      <input type="text"  name="Surname" required>
      <br>

      <label for="Dob"><br>date of bith</label>
      <input type="date"  name="Dob" required>
      <br>

      <label for="username"><br>Username</label>
      <input type="text"  name="username" required>
      <br>

      <label for="email"><br>email</label>
      <input type="email"  name="email" required>
      

      <label for="password"><br>password</label>
      <input type="password" name="password" required>
      <br>
      
     
      <button  onclick ="location.href='products.php';">Create new account</button>
      
    </form>
   </div>  
</div>

</body>
<?php
include "includes/footer.php";
?>


</html>
