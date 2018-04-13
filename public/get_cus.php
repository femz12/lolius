<?php  
include 'config.php';
/*
//$message = $_POST['sender_msg'];
$itm_id = $_GET['itm_id'];
//$email = $_POST['email'];

$email = $_SESSION['email'];

$get_chat = mysqli_query($conn, "SELECT * FROM chat WHERE email = '$email' AND status = 'send'");

while($row = mysqli_fetch_assoc($get_chat)){
    echo $row['sender_msg']; 
     //echo "$row[0]";
    // echo $rw['sender_msg'] ? '<div class="msg_a">'.$rw['sender_msg'].'</div>' : '<div class="msg_b">'.$rw['biz_msg'].'</div>';
    
    
  // echo "<div class = 'msg_b'>" .$row['sender'] ." : ". $row['sender_msg']. "</span>" . "<span style='float:right'>" .$row['time']. "</span>". "<br>";
  
}
/*
 $res = mysqli_query($conn, "SELECT * FROM chat WHERE email = '".$_SESSION['email']."' AND itm_id = '".$itm_id."' AND staus = 'reply' ");
			        while($rw = mysqli_fetch_assoc($res)) {
			            echo $rw['sender_msg'] ? '<div class="msg_a">'.$rw['sender_msg'].'</div>' : '<div class="msg_b">'.$rw['biz_msg'].'</div>';
			        }*/

if(isset($_POST['itm_id'])){
    $output = '';
    
    $get_all = mysqli_query($conn, "SELECT * FROM chat WHERE itm_id = '".$_POST['itm_id']."'");
    while($row = mysqli_fetch_assoc($get_all)){
        $output = $row['sender_msg'];
    }
    
    echo $output;
    
}

// echo json_encode($response); 
?>