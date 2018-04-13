<?php  
include 'config.php';
$type = $_POST['type'];
//$chat = $_POST['chat'];

//echo $name . " : " ;
//echo $chat;
if($type == 'delete'){
$get = mysqli_query($conn, "DELETE * FROM msg");
}
//while($row = mysqli_fetch_assoc($get)){
  //  echo $row['name'] ." : ". $row['ms']. '<br>';
//}

?>