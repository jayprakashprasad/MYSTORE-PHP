<?php 
 include "db.php";
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

    
    <link rel="apple-touch-icon" href="../images/admin.png">
    <link rel="shortcut icon" href="../images/admin.png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">
               <span>MY STORE</span>
            </a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            
                        </ul>
                    </li>
                 
                
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
   
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
          
            <div class="header-menu">
             
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        

                        
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="pro_p"><i class="fa fa-user"></i> </span>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
      
        <div style="padding:2%;">
 
        <div class="breadcrumbs">
       
       <div class="col-sm-8">
            <div class="prod">Products</div>

                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-left">

                            <li><a href="#"> <i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#">Add New Products</a></li>
                           
                        </ol>
                    </div>
                </div>
            </div>
</div>
        </div>
     
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body col-lg-6">
                            <form  method="POST" action="" enctype="multipart/form-data">
                            <label for="Item-name">Item Name</label>

                             <select name="product_cat" id="selectLg" class="form-control-lg form-control">
                            <option>Select Please</option>
                            <?php  
                            $cats = mysqli_query($conn,"SELECT * FROM cats");
                            while($row = mysqli_fetch_array($cats)){
                              ?>

                            <option value="<?php echo $row['cat']; ?>"> <?php echo $row['cat']; ?> </option>
                            <?php } ?>
                                     </select>

                                    <br>
                                <div ><label><strong>  Product Name </strong> </label> &nbsp;&nbsp;
                                <input type="text" name="product_name">
                                </div> 

                                <br>
                                <div  ><label><strong>Product description </strong>   </label> 
                                <textarea name="product_desc" id="textarea-input" rows="6" placeholder="Content..." class="form-control"></textarea>
                                </div>
                              
                                <br>
                                <div><label><strong>Original Price  </strong> </label>
                                <input type="text" name="product_price">
                                 </div> 

                                 <br>
                                <div><label><strong> Product Image  </strong>  </label>
                                <input type="file" name="product_img" accept="image/*MIME" multiple>
                                </div>
                                <br>

                                <div class="form-actions form-group ">
                                 <button type="submit" class="btn btn-primary btn-sm" name="submit">Submit</button>
                                </div>
                                <br>
                                 <a href="product.php"> Cancel</a>
                      
                              </form>
                              <?php
                              
                              if(isset($_POST['submit'])){
                                  $pro_cat = $_POST['product_cat'];
                                  $pro_name = $_POST['product_name'];
                                  $pro_desc = $_POST['product_desc'];
                                  $pro_price = $_POST['product_price'];
                                 
                                

                                  $pro_img = $_FILES['product_img']['name'];
                                  $pro_tmp = $_FILES['product_img']['tmp_name'];

                                 move_uploaded_file($pro_tmp, "../images/$pro_img");

                                 $prod_id = uniqid();
                                 $query = "INSERT INTO products (`product_cat`,`product_id`,`product_name`,`product_desc`,`product_img`,`product_price`)
                                 VALUES ('$pro_cat','$prod_id','$pro_name','$pro_desc','$pro_img',' $pro_price')";

                                 $run = mysqli_query($conn,$query);
                                  if($run == true){
                                      echo "Product ";
                                  }
                                  else {
                                      echo "product doesnt inserted";
                                  }



                              }
                              
                              ?>

                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

      
        </div>
    </div>
        
</div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
