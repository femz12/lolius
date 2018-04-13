<?php  
include 'config.php';

$itm = $_POST['itm_id'];

$email = $_SESSION['email'];

$get = mysqli_query($conn, "SELECT * FROM chat WHERE biz_email = '$email'");
while($row = mysqli_fetch_assoc($get)){
    //echo  .$row['sender']  : ". $row['sender_msg'].  .$row['stat']. "</span>". "<br>";
    
echo $row['sender'];
}
?>