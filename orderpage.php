<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>
   
<body>

  <div class="container">
   <h2>Order information</h2>
   
   <div class="signin">
    <form action="shoppingcart.html" method="post">
  
      <label for="Name"><br>name</label>
      <input type="text"  name="Name" >
      <br>

      <label for="Surname"><br>surname</label>
      <input type="text"  name="Surname" >
      <br>

      <label for="email"><br>email</label>
      <input type="email"  name="email" >
      <br>

      <label for="address"><br>address</label>
      <input type="text"  name="address" >
      <br>

      <label for="location"><br>location</label>
      <input type="text"  name="location" >
      <br>

      <label for="street"><br>street</label>
      <input type="text"  name="street" >

      <label for="postcode"><br>postcode</label>
      <input type="text"  name="postcode" >
      <br>

      <label for="contactnumber"><br>contactnumber</label>
      <input type="tel"  name="number" >
   

    </form>
  
  
    
    <input type = "submit" value ="Order" name="confirm">
    

    <button type="Cancel" style="background-color:#D34F73">Cancel </button>

  </div>
   </div>  
</div>



<?php
include "includes/footer.php";
?>


