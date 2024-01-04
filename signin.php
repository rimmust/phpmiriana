<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>
   

<body>

  <div class="container">
   <h1>Sign in</h1>
   <div class="signin">
   
    <form action="index.php" method="get">
      <div class="imgconatiner">
        <img src="images/profile.png" alt="avatar">
      </div>

      <label for="email"><br>email</label>
      <input type="email"  name="email" required>
      <br>

      <label for="password"><br>password</label>
      <input type="password" name="password" required>
      <br>
      
     
      <button type="submit">Login</button>
      <button  onclick ="location.href='editd.php';">Edit account details</button>

      <h4>New to our website click here to create an account in a few seconds</h4>
      
      <button  onclick ="location.href='newaccount.php';">Create new account</button>
    
      
 
    </form>
   </div>  
</div>

<?php
include "includes/footer.php";
?>
