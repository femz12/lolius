<?php 
include 'main_tech.php';

include 'config.php';   
?>

<div class="banner-top">
	<div class="container">
		<h3 >Welcome <?php  echo $name; ?></h3>
		<h4><a href="tech.php">Home</a><label>/</label>Dashboard</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--content-->               
<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Your List of Services</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                      <span class="glyphicon glyphicon-backward"></span> &nbsp; Click Here to Add A Service You can Render
                    </button>
 <div class=" con-w3l agileinf">
                             <?php 
        $get_cate = mysqli_query($conn, "SELECT * FROM tech_items WHERE email = '$email'");
        while($row = mysqli_fetch_assoc($get_cate)){
        ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" class="offer-img">
										<img src="<?php echo $row['pic'];  ?>" class="img-responsive" alt=""  height="200" width="200">
                                    </a>
									<div class="mid-1">
										<div class="women">
											<h6><?php echo $row['device'];  ?> Repair</h6>							
										</div>
                                        <div class="women">
											<h6><?php echo $row['brand'];  ?> </h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price">&#8358; <?php echo number_format($row['price']);  ?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="24" data-name="Wheat" data-summary="summary 24" data-price="6.00" data-quantity="1" data-image="images/of24.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
     
     <?php } ?>
     
     
            </div>
            
            
            
    </div>
</div>
                
                
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModa2Label">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								
								<div class="col-md-10 col-md-offset-1 span-1 ">
									<h3>Device Information</h3>
									<p class="in-para"> Hire the best technician around...</p> 
									
                    <form action="" method="post" id="" enctype="multipart/form-data">
				    <div id="error">
                    <!-- error will be showen here ! -->
                    </div>
                     
                    <div class="form-group">
                        
                    <select name="device" id="device_type" class="form-control" required>
                        <option value="">Select A Device</option>
                        <?php
                        $stmt = mysqli_query( $conn, "SELECT * FROM device");
                        //$stmt->execute();
                        while($row=mysqli_fetch_assoc($stmt))
                        {
                            ?>
                            <option value="<?php echo $row['id']; ?>" style="color:black"><?php echo $row['name']; ?></option>
                            <?php
                        } 
                        ?>
                        </select>
                        </div> 
                        
                         <div class="form-group">  
                        <select name="brand" class="form-control state" id="brand_name">
                        <option value="">Select Your Brand Name</option>
                        </select>
                        </div>
                    
                    
                   <div class="form-group">
                     <input type="text" class="form-control" placeholder="Model of Device" name="model" id="" required />
                        </div>
                    
                    <div class="form-group">
                    <select name="fault" id="" class="form-control" required>
                        <option value = "">What fault do you want to fix on this device</option>
                        <?php
                        $stmt = mysqli_query( $conn, "SELECT * FROM fault");
                        //$stmt->execute();
                        while($row=mysqli_fetch_assoc($stmt))
                        {
                            ?>
                            <option value="<?php echo $row['name']; ?>" style="color:black"><?php echo $row['name']; ?></option>
                            <?php
                        } 
                        ?>
                    </select>
                    </div>
                        
                     <div class="form-group">
                    <select name="duration" id="" class="form-control" required>
                        <option value="">How soon do you want the device to be repaired</option>
                         <?php
                        $stmt = mysqli_query( $conn, "SELECT * FROM duration");
                        //$stmt->execute();
                        while($row=mysqli_fetch_assoc($stmt))
                        {
                            ?>
                            <option value="<?php echo $row['name']; ?>" style="color:black"><?php echo $row['name']; ?></option>
                            <?php
                        } 
                        ?>
                    </select>
                    </div>
                        
                         <div class="form-group">
                     <input type="text" class="form-control" placeholder="Price" name="price" id="" required />
                        </div>
                        
                        <div class="form-group">
                    <input type="file" class="form-control" name="file" required />
                    </div>
                   
                    <hr />
        
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-default pull-right" value="Save" >               
                        </div>
                    </form>			
				</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>


                <?php
            //    }else{
                ?>
                <?php// } ?>
            </div>
            
            <?php  
             
 //if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST['submit']))
 //{

           
               
                
               // error_reporting(0);


     
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
     
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
    
 	$image =$_FILES["file"]["name"];
	$uploadedfile = $_FILES['file']['tmp_name'];
      $device = $_POST['device'];
                $brand = $_POST['brand'];
                $model = $_POST['model'];
                $fault = $_POST['fault'];
                $price = $_POST['price'];
                $duration = $_POST['duration'];
                $pic = $_POST['pic'];
                
                $email = $_SESSION['email'];
    
    $giv = mysqli_query($conn, "SELECT * FROM technician WHERE email = '$email'");
    while($si = mysqli_fetch_assoc($giv)){
        $name = $si['name'];
        $email= $si['email'];
        
    }
                $get_device = mysqli_query($conn, "SELECT * FROM device WHERE id = '$device'");
                $get = mysqli_fetch_assoc($get_device);
                $device_name = $get['name'];
                
                $get_brand = mysqli_fetch_assoc($conn, "SELECT * FROM brand WHERE id = '$brand'");
                $gets = mysqli_fetch_assoc($get_brand);
                $brand_name = $gets['name'];
     
 
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
else if($extension=="gif")
{
$uploadedfile = $_FILES['file']['tmp_name'];
$src = imagecreatefromgif($uploadedfile);
 
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


$newwidth1=900;
$newheight1=1020;
//$newheight1=($height/$width)*$newwidth1;
$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);


//$filename = "tech_file/". $_FILES['file']['name'];

$filename1 = "tech_file/new". $_FILES['file']['name'];



imagejpeg($tmp,$filename,100);

imagejpeg($tmp1,$filename1,100);

imagedestroy($src);
imagedestroy($tmp);
imagedestroy($tmp1);
            
            
}}
   
     move_uploaded_file($_FILES["image"]["tmp_name"], "tech_file/". $_FILES["image"]["name"]);
                
              // $image = (file_get_contents($_FILES['image']['tmp_name']));
				//            $image_name = ($_FILES['image']['name']);
				//			$image_size = getimagesize($_FILES['image']['tmp_name']);
				//			move_uploaded_file($_FILES["image"]["tmp_name"], "tech_file/" . $_FILES["image"]["name"]);
				//			$pic = "tech_file/". $_FILES["image"]["name"];
                $ran_id = rand();
                $prd_id = 'ID_'.$ran_id;
                
                $insert = mysqli_query($conn, "INSERT INTO tech_items (prd_id, device, brand, model, fault, duration, pic, email, name, price) VALUE ('$prd_id', '$device_name', '$brand', '$model', '$fault', '$duration', '$filename1', '$email', '$name', '$price')") or die(mysqli_error());
                
                 echo "<script>alert('Device Added Successfully')</script>";
                echo "<script>window.location = 'tech_list.php';</script>";
            }
            
            ?>
				
		
<!--footer-->
<?php include 'footer_user.php';  ?>
     
<!-- //footer-->
<script type="text/javascript" src="script.js"></script>

<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  
  </script>

  
  
  				
</body>
</html>