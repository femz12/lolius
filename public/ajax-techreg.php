<?php  
 include 'config.php';
 if($_POST){
     
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $name = mysqli_real_escape_string($conn, $_POST['name']);
     $biz_cate = mysqli_real_escape_string($conn, $_POST['biz_cate']);
     $biz_loc = mysqli_real_escape_string($conn, $_POST['biz_loc']);
     $biz_lga = mysqli_real_escape_string($conn, $_POST['biz_lga']);
     $biz_addr = mysqli_real_escape_string($conn, $_POST['biz_addr']);
     $biz_det = mysqli_real_escape_string($conn, $_POST['biz_det']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $date = mysqli_real_escape_string($conn, $_POST['date']);
     $biz_stage = mysqli_real_escape_string($conn, $_POST['biz_stage']);
     $biz_offer = mysqli_real_escape_string($conn, $_POST['biz_offer']);
     $web = mysqli_real_escape_string($conn, $_POST['web']);
     $phone = mysqli_real_escape_string($conn, $_POST['phone']);
     
     $get_email = mysqli_query($conn, "SELECT * FROM technician WHERE email = '$email'");
     $get_email_count = mysqli_num_rows($get_email);
     if($get_email_count > 0){
         echo "1";
     }else{
         
         $Today = date('y:m:d',time());
        $new = date('l, F d, Y', strtotime($Today));
          
         $get_lga = mysqli_query($conn, "SELECT * FROM states WHERE state_id = '$biz_loc'");
         $fet =mysqli_fetch_assoc($get_lga);
         $real_loc = $fet['name'];
         /*
         $hash = hash('sha256', $password1);
 
        function createSalt()
        {
            $text = md5(uniqid(rand(), true));
            return substr($text, 0, 3);
        }
 
        $salt = createSalt();
        $password = hash('sha256', $salt . $hash);
         */
         
         $reg = mysqli_query($conn, "INSERT INTO technician (name, email, password, salt, biz_cate, biz_offer, biz_stage, biz_loc, biz_lga, biz_addr, biz_det, web, phone, date) VALUES ('$name', '$email', '$password', 'salt', '$biz_cate', '$biz_cate',  '$biz_offer', '$real_loc', '$biz_lga', '$biz_addr', '$biz_det', '$web', '$phone', '$new')") or die(mysql_error());
         
         //$reg = mysqli_query($conn, "INSERT INTO technician (name, email, password, salt,  biz_offer, biz_stage, biz_loc, biz_lga, biz_addr, phone, date) VALUES ('$name', '$email', '$password', 'salt',  '$biz_cate',  $biz_offer', '$real_loc', '$biz_lga', '$biz_addr', '$phone', '$new')") or die(mysql_error());
         
         /*  send an email  
         
         
       	$to = "$email";
       	$subject = "DoNotReply - Registeration Confirmation From Lolius";
       	$text = " 
        Your registeraion was successful. 

       	Click the Link Below to Activate your email account

       	===================================================

       	http://lolius.com?email=$email

       	===================================================	



       	If you did not request for this mail, please disregard it.

       	Lolius Team

       	";

       	$header = "From: BizAllianz". "\r\n" . "CC: info@bizzallianz.com";

       	mail($to,$subject,$text,$header);
        */
       
         
         echo "registered";
         
     }
 }
         
?>