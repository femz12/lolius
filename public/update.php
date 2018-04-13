<?php  

include 'config.php';

    if(!isset($_SESSION['email'])){ 
        echo "<script> window.location = 'index.php'</script>";
    }
    

   $email = $_SESSION['email'];
    
    $giv = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
    while($si = mysqli_fetch_assoc($giv)){
        $name = $si['name'];
        $email= $si['email'];
        $biz_cate = $si['biz_cate'];
        $biz_stage = $si['biz_stage'];
        $biz_loc = $si['biz_loc'];
        $date = $si['date'];
        $biz_det = $si['biz_det'];
        $web = $si['web'];
        $phone = $si['phone'];
    }
 $get_item = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
            
            while($ro = mysqli_fetch_assoc($get_item)){
                $itm_id = $ro['t_code'];
            }
$getimg = mysqli_query($conn, "SELECT * FROM itm_images WHERE itm_id = '$itm_id' ORDER BY id LIMIT 1");
$get = mysqli_fetch_assoc($getimg);
$img = $get['itm_image'];

$update_stat = mysqli_query($conn, "UPDATE items SET status = 'ON', itm_img = '$img' WHERE biz_email = '$email' AND itm_id = '$itm_id'") or die(mysqli_error());

$updcode = mysqli_query($conn, "UPDATE business SET t_code = '' WHERE email = '$email'") or die(mysqli_error());



?>