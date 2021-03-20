<?php 
 include "db.php";
?>




<?php 




$pro_id = $_GET['product_id'];

$query = "delete  from products where product_id='$pro_id' ";
$run = mysqli_query($conn,$query);
if ($run === true){
    echo "$pro_id has been Deleted Successfully";
    header("Location: admin");  
}
else {
    echo "Sorry Error Occured.";
}

?>