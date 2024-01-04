<?php
require_once "includes/db-functions.php";
include "includes/header.php";
require_once "includes/dbh.php";

  
?>
   

<body>

  <div class="container">
   <h1>Shopping Cart steet and country example</h1>
   <h1>application example follow it </h1>
  <!--shopping cart from insted of town-->
  <!-- function that brings the shopping cart -->

   <?php 
 foreach($town as $row):
   ?>
  <!--id that i get from the output is the title of Course -->
  <!--id u title gejjin mit table inifisha -->
   <!-- value id fo town id and name are coming from the databse so always check the name -->
   <img src="images/d4.PNG" alt="prodcut disc silk sonic" width="300px" height="200px"><br>
  <label for="quantity"><br>quantity</label>

 <input type="number"  name="number" required>   <br> 

<button type="Add order">Make order</button>

 <button type="Delete">Delete </button> <br>

<?php
 endforeach;
 ?>
   

</div>


<?php
include "includes/footer.php";
?>

</html>
