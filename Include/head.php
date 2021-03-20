<?php

session_start();
include "cms/db.php";


?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cms/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="cms/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="cms/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="cms/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="cms/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel='stylesheet' type='text/css' href='style.css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <style>
.orderss{
    background: white;
    width: 800px;
    margin: 0px;
    height: 200px;
    padding: 50px;
    border-bottom: 1px solid gray;
    text-align:center;
    margin-top:30px;

} 

a {
    text-decoration: none !important;
}


.carting {
 color: white;
    background: gray;
     font-size: 20px;
    font-family: sans-serif;
    font-weight: bold;
    background: cornflowerblue;
    border-radius: 4px;
}
.label-feat {
    text-transform: uppercase;
    text-align: center;
    padding: 2%;
    color: white;
    background-size: cover;
    background-image: url(https://ak.picdn.net/shutterstock/videos/18413557/thumb/1.jpg);
    box-shadow: -webkit-box-shadow: 0px 25px 17px -4px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 25px 17px -4px rgba(0,0,0,0.75);
    box-shadow: 0px 25px 17px -4px rgba(0,0,0,0.5);
    margin-bottom: 3%;

}

.single:nth-child(4){
    margin-left: 1.4%
}

.single> img {
 
}


.P-grid {
    display: grid;
    grid-template-columns: 24% 24% 24% 24%;
    grid-gap: 1%;
    padding: 2%;
}

.cart-button {
    margin: 0px;
   

}

.navbar>ul>li>a>img {
    width: 23px;
    vertical-align: middle;
}

.navbar>ul {
    padding: 0px;
    display: grid;
    grid-template-columns: 25% 25% 25% 25%;
    width: 100%;
}

.single{
    box-shadow: 0 7px 17px 0 rgba(23,84,116,0.18);
    margin-bottom: 8%;
}
.single:hover {
box-shadow: 0 7px 37px 0 rgba(23,84,116,0.28);
}
.cart-inner-butt{
    background: orangered;
    padding: 4%;
   text-transform:Capitalize ;
   margin-top: 4%;
    border-radius: 5px;
    font-size:18px;
}

.cart-button:hover  .cart-inner-butt {
background:dodgerblue;
color:white;
}
.nd2-h4{
    background:darkslategray;
    line-height: 2;
    margin: 2px;
}

.fixed-label{
    position: fixed;
    width: 100%;
    top: 0;
    display:none

}
 </style>
 </head>
<script>
    $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 100) {
    $('.fixed-label').show();
  } else {
    $('.fixed-label').hide();
  }
});
    </script>
