
<?php 
error_reporting(E_ALL ^ E_NOTICE);
 $user_id =$_SESSION['user_id'];

 $query = mysqli_query($conn, "SELECT name FROM  users where user_id='$user_id'");
 while($row = mysqli_fetch_array($query)){
      $userName = $row['name'];
 }

?>


<div class="header" >
        <ul>
            <li><a href="#"><strong> My Store</strong> </a></li>
            <li><a href="index">Home</a></li>
            <?php if(empty($_SESSION['user_id'])) { ?>
            <li><a href="signin">Sign In</a></li>
            <li><a href="signup">Sign Up</a></li>
            <?php } else { ?>
                <li><a href="signout">Sign Out</a></li> 
         
           
            <li><a href="#">Welcome <?php echo $userName?></a></li> 
            <?php  } ?>
            <li><a href="checkout">Check Out</a></li>
        </ul>
    </div>