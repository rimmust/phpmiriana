<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>
   

<body>

  <div class="container">
   <h1>Shopping Cart</h1>
   
<img src="images/d4.PNG" alt="prodcut disc silk sonic" width="300px" height="200px"><br>
<label for="quantity"><br>quantity</label>

<input type="number"  name="number" required>   <br> 

<button type="Add order">Make order</button>

<button type="Delete">Delete </button> <br>

</div>


<?php
include "includes/footer.php";
?>

</html>
