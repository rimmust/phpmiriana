<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>

   

<body>

  <div class="container">
   <h1>The Little Mermaid Sound Track Movie</h1>
   <section>
    <img src="images/da5.png"  alt="vinyl record 1" width="400px" height="300px">
   </section>
  
   <div class="textaside">
    
       <p>
        
         Release Date: 2023 <br><br>
         Genre:Jazz,Soul,Pop <br><br>
         Lenght : 42.50 <br><br>
         Producer:Disney<br><br>
         Price: 70
       </p>

      
    

       <button  onclick ="location.href='orderpage.html';">Order</button>
     
   </div>


   <div class="wrapper">
    <div class="rating">
     <img src="images/Untitled-1.png" width="20px" height="20px">
     <img src="images/Untitled-1.png" width="20px" height="20px">
    <img src="images/Untitled-1.png" width="20px" height="20px">
    <img src="images/Untitled-1.png" width="20px" height="20px">
    <img src="images/Untitled-1.png" width="20px" height="20px">
    </div>

  
    <textarea name="opinion" cols="30" rows="4" placeholder="Write review here"></textarea>
      <div class="btn-group">
        <button type="submit" class="btn-submi">Post</button>
        <button type="submit" class="btn-submi">update</button>
        <button class="btn-cancel">cancel</button>
      </div>
    


  </div>

   
  
</div>

</body>
<?php
include "includes/footer.php";
?>