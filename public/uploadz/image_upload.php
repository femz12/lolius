<?php
	 

include '../config.php';

    if(!isset($_SESSION['email'])){
        
        echo "<script> window.location = '../index.php'</script>";
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
if(ISSET($_POST['save'])){
error_reporting(0);

$change="";
$abc="";


 define ("MAX_SIZE","400");
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

 $errors=0;
  
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
 	$image =$_FILES["file"]["name"];
	$uploadedfile = $_FILES['file']['tmp_name'];
     
 
 	if ($image) 
 	{
 	
 		$filename = stripslashes($_FILES['file']['name']);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		
		
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		
 			$change='<div class="msgdiv">Unknown Image extension </div> ';
 			$errors=1;
 		}
 		else
 		{

 $size=filesize($_FILES['file']['tmp_name']);


if ($size > MAX_SIZE*1024)
{
	$change='<div class="msgdiv">You have exceeded the size limit!</div> ';
	$errors=1;
}


if($extension=="jpg" || $extension=="jpeg" )
{
$uploadedfile = $_FILES['file']['tmp_name'];
$src = imagecreatefromjpeg($uploadedfile);

}
else if($extension=="png")
{
$uploadedfile = $_FILES['file']['tmp_name'];
$src = imagecreatefrompng($uploadedfile);

}
else 
{
$src = imagecreatefromgif($uploadedfile);
}

echo $scr;

list($width,$height)=getimagesize($uploadedfile);


$newwidth=400;
$newheight=800;
//$newheight=($height/$width)*$newwidth;
$tmp=imagecreatetruecolor($newwidth,$newheight);


$newwidth1=500;
$newheight1=800;
//$newheight1=($height/$width)*$newwidth1;
$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);


$filename = "uploader/". $_FILES['file']['name'];

$filename1 = "uploads/small". $_FILES['file']['name'];



imagejpeg($tmp,$filename,100);

imagejpeg($tmp1,$filename1,100);

imagedestroy($src);
imagedestroy($tmp);
imagedestroy($tmp1);
            
            
}}
 }
    
     echo "<script>window.location = 'index.php'</script>";
     
/*
	if(ISSET($_POST['save'])){
		if($_FILES['image']['name'] == ""){
				echo '<script>alert("Please Select an Image")</script>';
				echo '<script>window.location = "index.php"</script>';
		}else{	
			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name = addslashes($_FILES['image']['name']);
			$image_size = getimagesize($_FILES['image']['tmp_name']);
			move_uploaded_file($_FILES["image"]["tmp_name"], "upload/". $_FILES["image"]["name"]);
			$location = $_FILES["image"]["name"];
            
            $get_item = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
            
            while($ro = mysqli_fetch_assoc($get_item)){
                $itm_id = $ro['t_code'];
            }
            
            $check = mysqli_query($conn, "SELECT * FROM itm_images WHERE itm_id = '$itm_id'");
            
            $check_count = mysqli_num_rows($check);
            
            if($check_count < 4){
                $upload = mysqli_query($conn, "INSERT INTO itm_images (itm_id, itm_image) VALUES ('$itm_id', '$location')");
            
            
                echo "<script>window.location = 'index.php'</script>";

                
            }elseif($check_count == 4){
                
                $checks = mysqli_query($conn, "SELECT * FROM itm_images WHERE itm_id = '$itm_id'");
            
                $check_counts = mysqli_num_rows($checks);
                
                $reset = mysqli_query($conn, "UPDATE items SET biz_id = '' WHERE biz_email = '$email'") or die(mysqli_error());
                
               // $reset = mysqli_query($conn, "UPDATE business SET t_code = '' WHERE email = '$email'") or die(mysqli_error());
                
                echo '<script>alert("Maximum Picture Upload Reach")</script>';
				echo '<script>window.location = "../preview.php"</script>';
                        }
            
            
			//$stmt = $conn->prepare("INSERT INTO `photo` (photo_name) VALUES(?)") or die(mysqli_error());
			//$stmt->bind_param("s", $location);
			//if($stmt->execute()){
				//$stmt->close();
				//$conn->close();
				//echo '<script>alert("Successfully Upload Image")</script>';
				//echo '<script>window.location = "index.php"</script>';
			//}else{
			//	echo '<script>alert("Error")</script>';
			//}
		}*/	
	}
?>