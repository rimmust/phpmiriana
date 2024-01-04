<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>

  <div class="container">
   <h2>Order</h2>
   
   <div class="signin">
    <form action="shoppingcart.html" method="post">
  
      <label for="Name"><br>name</label>
      
      <br>

      <label for="Surname"><br>surname</label>
     
      <br>

      <label for="email"><br>email</label>
      
      <br>

      <label for="address"><br>address</label>
     
      <br>

      <label for="location"><br>location</label>
     
      <br>

      <label for="postcode"><br>postcode</label>
      
      <br>

      <label for="contactnumber"><br>contactnumber</label>
      
   

    </form>
  
    <button  onclick ="location.href='orderpage.html';">Edit </button>

    <button  onclick ="location.href='shoppingcart.html';">Confirm </button>

    <button type="Cancel" style="background-color:#D34F73">Cancel </button>
    

  </div>
   </div>  
</div>

<?php
include "includes/footer.php";
?>

