<?php  
include 'config.php';

    if(!isset($_SESSION['email'])){ 
        echo "<script> window.location = 'index.php'</script>";
    }
if($_POST){
$itm_id = $_POST['itm_id'];
$itm_name = $_POST['itm_name'];
$itm_price = $_POST['itm_price'];
$itm_qty = $_POST['itm_qty'];
$itm_size = $_POST['itm_size'];
$itm_spec = $_POST['itm_spec'];
$itm_des = $_POST['itm_des'];
$itm_type = $_POST['itm_type'];
    
$update = mysqli_query($conn, "UPDATE items SET itm_name = '$itm_name' WHERE itm_id = '$itm_id'");
    
    
}

 ?>