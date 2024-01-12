<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>
<?php
//if(isset($_POST['add_product']))
//{
  //the name of the attributes
  //represnt the name of produtc form the form 
  //$product_name = $_POST['product_name'];
  //$product_genre = $_POST['product_genre'];
  //$product_description = $_POST['product_description'];
  //$product_sqty= $_POST['product_sqty'];
  //$product_bn = $_POST['product_bn'];
  //$product_price = $_POST['product_price'];
  //$product_vat= $_POST['product_vat'];
  //$product_lenght = $_POST['product_lenght'];
  //$product_image = $_FILES['product_image']['name'];
  //$product_image_tmp_name =$_FILES['product_image']['tmp_name'];
  //take images from folder
  //$product_image_folder =images/'.$product_image;

//check if the input are empty
  //if(empty($product_name) OR empty($product_genre) OR empty($product_description) OR empty($product_sqty) OR  empty($product_bn) OR
  //empty( $product_price)  OR empty($product_vat))
  //{
   // $message[] = 'fill everything';
  //}else
  //{
    //insert the datat in the database
    //$insert = "INSERT INTO product (name,genreID,description,StockQTY,Bacthnumber,price,vat)
    //VALUES('$product_name','$product_description',' $product_sqty','$product_bn','$product_price',$product_vat,'$product_genre')";
    //upload the items 
   // $uploads = mysqli_query($conn, $insert);
    //if($uploads)
   // {
      //moves the file in the new location
       // move_uploaded_file($product_image_tmp_name,$product_image_folder);
      //  $message[] = 'new product added';
   // }else
   // {
    //  $message[] = 'error';
    //}

  //}
 
//}

?>

<body>
  <div class="container">
   <h1>Product managment</h1>
   
   <form action="productmanagment.php" method="post">
   

   <label for="Name"><br>name</label>
   <input type="text"  name="product_name" >
   <br>

   <label for="description"><br>description</label>
    <input type="text"  name="product_description">
    <br>

    <label for="Stockqty"><br>qty</label>
    <input type="number"  name="product_sqty">
    <br>

    <label for="Batchnumber"><br>Batchnumber</label>
    <input type="number"  name="product_bn">
    <br>
     <label for="Vat"><br>vat</label>
    <input type="number"  name="product_vat" >
    <br>

    <label for="lenght"><br>lenght</label>
    <input type="number"  name="product_lenght" >
    <br>

 <label for="genre"><br>Genre</label>
   <input type="text"  name="product_genre" >
   <br>


  
    <label for="Price"><br>Price</label>
    <input type="number"  name="product_price">
    <br>
   


    <input type ="submit"  name="add_product" value="add aproduct">
    <br>

    </form>

   
    <br>
   
   </div>

   
  
</div>


  
    
      
 

</body>
<?php
include "includes/footer.php";
?>


