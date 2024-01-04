<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>

<body>

  <div class="container">
   <h1>Edit product</h1>
   
  
   <label for="Name"><br>Opera</label>
   
   <br>

   <label for="Dob"><br>March 2019</label>
  
   <br>

   <label for="genre"><br>Classic</label>
   
   <br>

   <label for="lenght"><br>50:00</label>
    
    <br>

    <label for="Price"><br>90</label>
  
    <br>
    <br>

    <img src="images/ca4.png" width="60px" height="60px">
    <br>
   
    <button  onclick ="location.href='productmanagment.php';">edit </button>
    <button  onclick ="location.href='products.php';">Confirm </button>
    <button  onclick ="location.href='productmanagment.php';">Delete </button>

   

    
 
  
   </div>

  
</div>

</body>
<?php
include "includes/footer.php";
?>


