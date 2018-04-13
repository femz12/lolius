<?php 
include 'config.php';

$message = $_POST['sender_msg'];
$itm_id = $_POST['itm_id'];
$email = $_POST['email'];


    
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

////relation ship chamber
 $email = $_SESSION['email'];
$get_notifications = mysqli_query($conn, "SELECT * FROM relation WHERE email = '$email' AND biz_email = '$biz_email'");
        $get_counts = mysqli_num_rows($get_notifications);
    
        if($get_counts == 0){
            $email = $_SESSION['email'];
            
            $inputnotes = mysqli_query($conn, "INSERT INTO relation (email, biz_email, status) VALUES ('$email', '$biz_email', 'relation')");
           // $ups = mysqli_query($conn, "UPDATE relation SET count = count+1 WHERE WHERE email = '$email' AND itm_id = '$itm'") or die(mysqli_error());
                    
        }

$email = $_SESSION['email'];

$get_sender = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
 $rs = mysqli_fetch_assoc($get_sender);

$sender_name = $rs['name'];

$insert = mysqli_query($conn, "INSERT INTO chat (sender_msg, itm_id,biz_email, biz_loc, biz_addr, biz_name, itm_name, sender, email, time, date, status) VALUES ('$message', '$itm_id', '$biz_email', '$biz_loc', '$biz_addr', '$biz_name', '$itm_name', '$sender_name', '$email', '$time','$date', 'send')");

//// nitufucation chamber
 $email = $_SESSION['email'];
    $up = mysqli_query($conn, "UPDATE note SET count = count+1 WHERE WHERE email = '$email' AND itm_id = '$itm_id'");
       
    $get_notification = mysqli_query($conn, "SELECT * FROM note WHERE email = '$email' AND itm_id = '$itm_id'");
    $get_count = mysqli_num_rows($get_notification);
    
 if($get_count == 0){
            $email = $_SESSION['email'];
    
            $inputnote = mysqli_query($conn, "INSERT INTO note (email, biz_email, sender_name, itm_id, itm_name, status) VALUES ('$email', '$biz_email', '$sender_name', '$itm_id', '$itm_name', 'new')");
            $ups = mysqli_query($conn, "UPDATE note SET count = count+1 WHERE WHERE email = '$email' AND itm_id = '$itm'") or die(mysqli_error());
                    
        }
    

?>