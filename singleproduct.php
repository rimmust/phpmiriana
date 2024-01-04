z<?php
include "includes/header.php";
require_once "includes/dbh.php";
  
?>
   

<body>

  <div class="container">
   <h1>The Dark Side of the moon</h1>
   <section>
    <img src="images/arrange1.png"  alt="vinyl record 1"  width="400px" height="300px">
   </section>
  
   <div class="textaside">
    
       <p>
        
         Release Date: 1973 <br><br>
         Genre:progressive rock <br><br>
         Lenght : 42.50 <br><br>
         Producer:Pink Floyd<br><br>
         Price :179 
       </p>

      <button  onclick ="location.href='orderpage.php';">Order</button>

     
    
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

   
  
</div>

</body>
<?php
include "includes/footer.php";
?>