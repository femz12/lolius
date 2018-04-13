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

?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css" href = "css/style.css"/>
		<meta charset = "UTF-8" name= "viewport" content = "width=device-width, initial-scale=1" />
        
        <title>Bizallianz | Sellers Dashboard</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>


<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="../js/jstarbox.js"></script>
	<link rel="stylesheet" href="../css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		
<!---//End-rate---->

        
	</head>
<body>
	<div class="header">

		<div class="container">
			
			<div class="logo">
				<a href="offer.html"><img src="../images/p.png"  alt=""><br><span>Connecting buyers to close stores</span></a>
		</div>
			<div class="head-t">
				<!--<ul class="card">
					<li><a href="../about.html" ><i class="fa fa-heart" aria-hidden="true"></i>About Us</a></li>
					<li><a href="../login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="../register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="../shipping.html" ><i class="fa fa-phone" aria-hidden="true"></i>Contact Us</a></li>
				</ul>-->	
			</div>
			
			<!--<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>-->
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="../user.php" class="hyper "><span>Home</span></a></li>	
							<li class=""><a href="../user.php" class="hyper "><span>Home</span></a></li>	
							<li><a href="../addcate.php" class="hyper"><span>Add Category</span></a></li>
							<li><a href="../add.php" class="hyper"><span>Add Product</span></a></li>
							<li><a href="../items.php" class="hyper"><span>View Product</span></a></li>
							<li><a href="../note.php" class="hyper"><span>Chat Notification</span></a></li>
                            <li><a href="../logout.php" class="hyper"><span>LogOut</span></a></li>
							
						</ul>
					</div>
					</nav>
					<div class="cart" >
					
						<span class="fa fa-user "> <span><?php echo $name; ?></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
        
        <div class="container">
<br>
	<div class = "row">
		<div class = "col-md-8 col-md-offset-2">
            <h2>Add Product Image</h2>
            
            <br>
            <form action="" method="post" enctype="multipart/form-data">
    <label>
      <span>Click Here to Upload Pictures</span><br><br>
      <!--<input type="file" name="image" accept="image/*" />-->
        
        <input size="25" class="btn btn-default" name="file" type="file" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt" class="box" required/>
    </label>
    <input type="submit"  name = "submit" class="btn btn-default" value="Upload Image" />
                 </form>
            
				</div>
        </div>
            </div>
				
			
        <?php
        
        ////PHP SCRIPT TO RESIZE AND RESHAPE THE PICTURE INORDER TO FIT INTO THE REQUIRED SIZE AND FRAME EXPECTED
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
//else if($extension=="gif")
//{
//$uploadedfile = $_FILES['file']['tmp_name'];
//$src = imagecreatefromgif($uploadedfile);
 
//}
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


$newwidth1=900;
$newheight1=1020;
//$newheight1=($height/$width)*$newwidth1;
$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);


$filename = "uploader/". $_FILES['file']['name'];

$filename1 = "upload/new". $_FILES['file']['name'];



imagejpeg($tmp,$filename,100);

imagejpeg($tmp1,$filename1,100);

imagedestroy($src);
imagedestroy($tmp);
imagedestroy($tmp1);
            
            
}}
     
     
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
     
			move_uploaded_file($_FILES["image"]["tmp_name"], "upload/". $_FILES["image"]["name"]);
            $get_item = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
            
            while($ro = mysqli_fetch_assoc($get_item)){
                $itm_id = $ro['t_code'];
            }
     //Update the image against the item id and business information
        $update = mysqli_query($conn, "UPDATE items SET itm_img = '$filename1', biz_id = '', status = 'ON' WHERE itm_id = '$itm_id'");
        $email = $_SEESION['email'];
        $updcode = mysqli_query($conn, "UPDATE business SET t_code = '' WHERE email = '$email'") or die(mysqli_error());

               echo '<script>alert("Picture Uploaded Successfully")</script>';
				echo '<script>window.location = "../items.php"</script>';
                
           
}

?>
        
	</div>
    
    <br><br><br>
</body>
    <?php  include '../footer.php';  ?>
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/upload.js"></script>
    
</html>