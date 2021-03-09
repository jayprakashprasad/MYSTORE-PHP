
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

   <h2 style="text-align:center;">Ordered Products</h2>
   <?php 
 if(!empty($_SESSION['order_id'])){
    
       $order_id = $_SESSION['order_id'];
       mysqli_query($conn,"DELETE FROM cart WHERE product_id='$_GET[product_id]' and order_id='$order_id' ");
 
      $order_id = $_SESSION['order_id'];
      $query = mysqli_query($conn," SELECT * FROM products INNER join cart on cart.product_id=products.product_id WHERE cart.order_id='$order_id'");
      while($row = mysqli_fetch_array($query)) {

 

       ?>
  <div class="orderss"  >
  <img src="images/<?php  echo $row['product_img']; ?>" style="width:200px;height:100px;float:middle;"/>
  <a href="checkout.php?product_id=<?php echo $row['product_id']; ?>" style="float:right;">x</a> 

  <h5><?php  echo $row['product_name']; ?> </h5>
  <h4><?php  echo $row['product_desc']; ?></h4>
  <h5><?php  echo $row['quantity']; ?> </h5>
  
  </div>
 
   <?php } } else{ ?>
  
    <div class="order">
   <h2>You have not Updated cart </h2> 
   </div>
  
   <?php } ?>

  <?php  include "includes/footer.php"  ?>
  
 <!--  style="width:100px ;height:100px; margin:0px; background:white; padding:12px; border-bottom:1px solid gray;" -->

</body>
          
       
          
         
</html>

