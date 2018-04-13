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


    $id = $_GET['id'];
    $chets = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$id'");
    while($ro = mysqli_fetch_assoc($chets)){
        $cate_name = $ro['category'];
       $cate_img = $ro['pics'];
       $cate_id = $ro['id'];
      // $user = $ro['user'];
    
    }

$chet = mysqli_query($conn, "SELECT * FROM subcate WHERE cate_id = '$cate_id' AND user = '$email'");
       $chat_num = mysqli_num_rows($chet);
        if($chat_num == 0){
            
            
             $inset = mysqli_query($conn, "INSERT INTO subcate (cate_name, cate_img, cate_id, user) VALUES ('$cate_name', '$cate_img', '$cate_id', '$email')") or die(mysqli_error());
            
          echo "<script>alert('You have Successfully Subcribe to $cate_name Category'); 
                                window.location = 'addcate.php';</script>";
            
             
                   }else{
            
            echo "<script>alert('You have subscribe to $cate_name already'); 
                                window.location = 'addcate.php';</script>";
            
        }

        
        // $inset = mysqli_query($conn, "INSERT INTO subcate (cate_name, cate_img, cate_id, user) VALUES ('$cate_name', '$cate_img', '$cate_id', '$email')") or die(mysqli_error());
       
//echo "<script>window.location = 'addcate.php';</script>";

       // $chet = mysqli_query($conn, "SELECT * FROM subcate WHERE user = '$user' AND cate_name = '$cate_name'");
    //    $chat_num = mysqli_num_rows($chet);
        //if($chat_num > 0){
           // $inset = mysqli_query($conn, "INSERT INTO subcate (cate_name, cate_img, cate_id, user) VALUES ('$cate_name', '$cate_img', '$cate_id', '$user')") or die(mysqli_error());
            
        //    echo "<script>window.location = 'addcate.php';</script>";
       // }else{
           // echo "<script>alert('okay')</script>";
        //}
    

?>