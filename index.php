
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
    $query  = "SELECT * FROM products order  by rand()";
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
<?php 

if($_GET['product_id']!=""){
   $pro_id = $_GET['product_id'];

   if(empty($_SESSION['order_id'])){
      $_SESSION['order_id'] = uniqid();
   }
$order_id = $_SESSION['order_id'];


$check_result = mysqli_query($conn,"SELECT * FROM cart where order_id='$order_id' and product_id='$pro_id' ");
 $run = mysqli_num_rows($check_result);

 if($run > 0){
    $query = mysqli_query($conn,"UPDATE cart set  quantity=quantity+1 where order_id='$order_id' ");
    if($query){
      echo "<script>alert('cart  has been updated')</script>";
    }
 }
else{
$query = mysqli_query($conn,"INSERT INTO cart (order_id,product_id,quantity)VALUES('$order_id','$pro_id',1)");

if($query === true){
   echo "<script>alert('product has been added to your cart')</script>";
}
} 
    
}
?>

