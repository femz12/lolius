<?php 
include 'config.php';
$name = $_POST['name'];
$chat = $_POST['chat'];
$itm = $_POST['itm'];
$email = $_POST['email'];
if($chat != ''){

 $Today = date('y:m:d',time());
$new = date('F d, Y', strtotime($Today));
//$itm_id = $_GET['itm_id'];

        $search = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm'");
        $search_count = mysqli_num_rows($search);
        $rows = mysqli_fetch_assoc($search);
        $biz_email = $rows['biz_email'];
    
        $get_biz = mysqli_query($conn, "SELECT * FROM business WHERE email = '$biz_email'");
        $rw = mysqli_fetch_assoc($get_biz);

        $biz_name = $rw['name'];
        $biz_loc = $rw['biz_loc'];
        $biz_addr = $rw['biz_addr'];
        $biz_email = $rw['email'];

        //$itm_id = $_GET['itm_id'];
            $email = $_SESSION['email'];
		mysqli_query($conn, "INSERT INTO chat (biz_name, biz_loc, biz_addr, biz_email, itm_id,  sender, email, sender_msg, stat)VALUES('$biz_name', '$biz_loc', '$biz_addr', '$biz_email', '$itm', 'Me', '$email', '$chat', '$new')");
        $up = mysqli_query($conn, "UPDATE note SET count = count+1 WHERE WHERE email = '$email' AND itm_id = '$itm'");
        $email = $_SESSION['email'];
        $get_notification = mysqli_query($conn, "SELECT * FROM note WHERE email = '$email' AND itm_id = '$itm'");
        $get_count = mysqli_num_rows($get_notification);
    
        if($get_count == 0){
            $email = $_SESSION['email'];
            
            $inputnote = mysqli_query($conn, "INSERT INTO note (email, biz_email, itm_id, status) VALUES ('$email', '$biz_email', '$itm', 'new')");
            $ups = mysqli_query($conn, "UPDATE note SET count = count+1 WHERE WHERE email = '$email' AND itm_id = '$itm'") or die(mysqli_error());
                    
        }
//$inset = mysqli_query($conn, "INSERT INTO msg (name, ms, time) VALUES ('$name', '$chat', now())");
  
}
//$inset = mysqli_query($conn, "INSERT INTO msg (name, ms, time) VALUES ('$name', '$chat', now())");


?>