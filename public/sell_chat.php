<?php 
include 'config.php';

$message = $_POST['sender_msg'];
$itm_id = $_POST['itm_id'];
$cus_emails = $_POST['email'];

$get_name_cus = mysqli_query($conn, "SELECT * FROM user WHERE email = '$cus_emails'");
$fte = mysqli_fetch_assoc($get_name_cus);
$cus_name = $fte['name'];

$search = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
        $search_count = mysqli_num_rows($search);
        $rows = mysqli_fetch_assoc($search);
        $biz_email = $rows['biz_email'];
        $itm_name = $rows['itm_name'];

//$email = $_POST['email'];
$email = $_SESSION['email'];

$get_biz = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
        $rw = mysqli_fetch_assoc($get_biz);

        $biz_name = $rw['name'];
        $biz_loc = $rw['biz_loc'];
        $biz_addr = $rw['biz_addr'];
        $biz_email = $rw['email'];
         //$date = date(" h:i:s:a");
         $time = date(" h:i:a");
         $date = date("F d, Y ");


$put = mysqli_query($conn, "INSERT INTO chat 
(biz_email,biz_loc, biz_addr, biz_name, itm_id, itm_name, sender, email, biz_msg, status, time, date)
VALUES
('$email', '$biz_loc', '$biz_addr', '$biz_name', '$itm_id', '$itm_name', '$cus_name', '$cus_emails', '$message', 'reply', '$time', '$date')");

    /*
    $search = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
        $search_count = mysqli_num_rows($search);
        $rows = mysqli_fetch_assoc($search);
        $biz_email = $rows['biz_email'];
        $itm_name = $rows['itm_name'];
    
        $get_biz = mysqli_query($conn, "SELECT * FROM business WHERE email = '$biz_email'");
        $rw = mysqli_fetch_assoc($get_biz);

        $biz_name = $rw['name'];
        $biz_loc = $rw['biz_loc'];
        $biz_addr = $rw['biz_addr'];
        $biz_email = $rw['email'];
         //$date = date(" h:i:s:a");
         $time = date(" h:i:a");
         $date = date("F d, Y ");

$email = $_SESSION['email'];

$get_sender = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
 $rs = mysqli_fetch_assoc($get_sender);

$sender_name = $rs['name'];

$insert = mysqli_query($conn, "INSERT INTO chat (sender_msg, itm_id,biz_email, biz_loc, biz_addr, biz_name, itm_name, sender, email, time, date) VALUES ('$message', '$itm_id', '$biz_email', '$biz_loc', '$biz_addr', '$biz_name', '$itm_name', '$sender_name', '$email', '$time','$date')");
*/
?>