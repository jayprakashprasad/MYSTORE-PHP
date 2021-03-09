
<?php

include "cms/db.php";


?>


<?php
   include "includes/head.php";
if(!empty($_SESSION['user_id']))  {
    echo "<script>window.location='index.php'</script>";
}
?>
<?php
   include "includes/header.php";

?>
<?php
   include "includes/navbar.php";

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Store</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="cms/apple-icon.png">
    <link rel="shortcut icon" href="cms/favicon.ico">


    <link rel="stylesheet" href="cms/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="cms/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="cms/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="cms/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="cms/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="cms/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<style>
    .navbar>ul {
        
    background: whitesmoke;

    }
</style>

</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap" style="margin-top: -8%;">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="cms/index.html">
                       <strong>MY STORE</strong>
                    </a>
                </div>
                <div class="login-form">
                    <form action="" method="POST">
                  
                        

                      
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign Up</button>
                                   
                                    <div class="register-link m-t-15 text-center">
                                        <p>Dont have account ? <a href="signup.php"> Sign Up</a></p>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="cms/vendors/jquery/dist/jquery.min.js"></script>
    <script src="cms/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="cms/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="cms/assets/js/main.js"></script>





  <?php include "includes/footer.php"  ?>
 
 <?php 
  if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
  
      $query = mysqli_query($conn, "SELECT * FROM users where email='$email' and password='$password' ");
       $check = mysqli_num_rows($query);
    
    if($check > 0){
       while ($row = mysqli_fetch_array($query)){
           $_SESSION['user_id'] = $row['user_id'];
       }
       echo "<script>window.location='index.php'</script>";
    }
   else {
     echo "you have entered wrong password";
   }

  }
   
  ?>


</body>
          
       
          
         
</html> 