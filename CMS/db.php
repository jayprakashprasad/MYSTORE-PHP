 
 <?php
  $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "mystore";
  
 $conn = mysqli_connect("$servername","$username","$password","$db");

 if($conn){
  //  echo "Database has been configured";
 }
 else{
  echo "eerere";
}

 
 
 ?>