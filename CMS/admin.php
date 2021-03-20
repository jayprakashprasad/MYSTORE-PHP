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

    <?php include "leftpanel.php";?>
    
    
    
    <!-- /#left-panel -->

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
        <br>
        <div class="breadcrumbs">
       
       <div class="col-sm-8">
            <div class="prod">Products</div>

                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-left">

                            <li><a href="#"> <i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#">Products</a></li>
                           
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
                                <strong class="card-title">Data Table <a href="add_product.php" class="btn-succe">  <button type="submit" class="btn btn-primary btn-sm" > + ADD New Gadget</button>
                              </a></strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sr#</th>
                                            <th>Product Category</th>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                            <th> Image</th>
                                            <th> Price</th>
                                            <th>Action</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0 ;
                                        $query = "SELECT * FROM products";
                                        $run = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($run)){
                                        $i++;
                                     
                                        ?>
                                        <tr class="response">
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['product_cat']; ?></td>
                                            <td><?php echo $row['product_name']; ?></td>
                                            <td><?php echo $row['product_desc']; ?></td>
                                          
                                            <td class="dbimg"><img  class="db-1" src ="../images/<?php echo $row['product_img']; ?>" alt="No Image">
                                          </td>
                                  
                                             <td><?php echo $row['product_price']; ?></td>
                                            <td style="text-align:center;">
                                             
                                                 <a  href="view.php?product_id=<?php echo $row["product_id"]; ?>"><span style="vertical-align:middle;" class="ti-eye"></span> </a> |
                                                 <a href="update.php?product_id=<?php echo $row["product_id"]; ?>"><span style="vertical-align:middle;" class="ti-pencil-alt"></span></a> |
                                                 <a href="delete.php?product_id=<?php echo $row["product_id"]; ?>"><span  style="color:red; vertical-align:middle;" class="ti-trash"></span></a>
                                             </td>
                                            

                                         
                                           
                                    </tr>
                                         <?php }  ?>
                             
                                    </tbody>
                                </table>
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
