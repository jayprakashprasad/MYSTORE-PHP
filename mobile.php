
<?php

include "cms/db.php";

?>
<?php
   include "includes/head.php";

?>
<?php
   include "includes/header.php";

?>
<?php
   include "includes/navbar.php";

?>



   <div>
   <h2 class="label-feat fixed-label">featured products </h2>
   <h2 class="label-feat">featured products </h2>
   <div class="P-grid">
   <?php  
    $query  = "SELECT * FROM products where product_cat='mobile' order by rand()";
    $run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($run)){
    ?> 

     
      <div class="single textc">
       <img src ="images/<?php echo $row['product_img']; ?>" alt="no images">
       <div class="P-Label">
          <h4><?php echo $row['product_name']; ?></h4>
          <h4 class="nd2-h4"><?php echo $row['product_price']; ?> (INR)</h4>
          </div>
          <h4 class="cart-button"><a class="carting" href="index?product_id=<?php  echo $row['product_id'];?>"><p class="cart-inner-butt">Add  To Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></p></a></h4>
      </div>
    <?php }  ?>
    </div>
   </div>
  <?php
 include "includes/footer.php"  ?>


</body>
          
       
          
         
</html>