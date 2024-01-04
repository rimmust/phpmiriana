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
      <input type="text"  name="Name" required>
      <br>

      <label for="Surname"><br>surname</label>
      <input type="text"  name="Surname" required>
      <br>

      <label for="email"><br>email</label>
      <input type="email"  name="email" required>
      <br>

      <label for="address"><br>address</label>
      <input type="text"  name="address" required>
      <br>

      <label for="location"><br>location</label>
      <input type="text"  name="location" required>
      <br>

      <label for="street"><br>street</label>
      <input type="text"  name="street" required>

      <label for="postcode"><br>postcode</label>
      <input type="text"  name="postcode" required>
      <br>

      <label for="contactnumber"><br>contactnumber</label>
      <input type="tel"  name="number" required>
   

    </form>
  
  
    <button  onclick ="location.href='editorder.php';">confirm  </button>

    

    <button type="Cancel" style="background-color:#D34F73">Cancel </button>

  </div>
   </div>  
</div>



<?php
include "includes/footer.php";
?>


