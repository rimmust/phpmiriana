<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>

<body>

  <div class="container">
   <h1>Product managment</h1>
   
  
   <label for="Name"><br>name</label>
   <input type="text"  name="name" required>
   <br>

   <label for="Dob"><br>Relase Date</label>
   <input type="date"  name="Dob" required>
   <br>

   <label for="genre"><br>Genre</label>
   <input type="text"  name="username" required>
   <br>

   <label for="lenght"><br>Length</label>
    <input type="number"  name="number" required>
    <br>

    <label for="Price"><br>Price</label>
    <input type="number"  name="number" required>
    <br>
    <br>

    <textarea name="opinion" cols="30" rows="4" placeholder="Image"></textarea>
    <br>
   

    <button  onclick ="location.href='productmanagmentedit.php';">Confirm </button>

    <button type="Cancel" style="background-color:#D34F73">Cancel </button>
  
   </div>

  
</div>

</body>
<?php
include "includes/footer.php";
?>


