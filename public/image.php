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
<!--<div class="kic-tops"><br>
	<div class="container ">
	<div class="kic ">
			<h3>Categories Subscribed</h3>
			
		</div>
        <?php 
        $get_cate = mysqli_query($conn, "SELECT * FROM subcate WHERE user = '$email'");
        while($row = mysqli_fetch_assoc($get_cate)){
        ?>
		<div class="col-md-3 kic-top1">
			<a href="additem.php?cate_name=<?php echo $row['cate_name']; ?>">
				<img src="biz/admin/<?php echo $row['cate_img'];  ?>" class="img-responsive" alt="">
			</a>
			<h6><a href="additem.php?cate_name=<?php echo $row['cate_name']; ?>"><?php echo $row['cate_name'];  ?></a></h6>
			<p></p>
		</div>
		
        <?php  } ?>
        <div class="col-md-3 kic-top1">
			<a href="addcate.php">
				<img src="images/ki5.jpg" class="img-responsive" alt="">
			</a>
			<h6><a href="addcate.php">Add More Categories</a></h6>
			<!--<p>Nam libero tempore</p>
		</div>
    </div>
</div>-->

<!--content-->
		<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Upload Image</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
            
           
            <div class=" con-w3l agileinf">
               
                    <div class="container">
                        <?php  
                  echo $prd_id = $_GET['prd_id'];
                        ?>
                        
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="col-md-8 col-md-offset-2" >
                    <div class="form-group">
                    <input type="file" class="form-control" name="file" required />
                        </div>
                            
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-default pull-right" value="Upload Image" >               
                    </div>
                    </div>
                            </form>
                        
                        
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

$filename1 = "tech_file/new". $_FILES['file']['name'];



imagejpeg($tmp,$filename,100);

imagejpeg($tmp1,$filename1,100);

imagedestroy($src);
imagedestroy($tmp);
imagedestroy($tmp1);
            
            
}}
                            move_uploaded_file($_FILES["image"]["tmp_name"], "tech_file/". $_FILES["image"]["name"]);
                                 $prd_id = $_GET['prd_id'];
                                
                                $insert = mysqli_query($conn, "UPDATE tech_items SET pic = '$filename1'
                                WHERE prd_id = '$prd_id'") or die(mysqli_error());
                                
                              echo "<script>alert('Action Completed $prd_id')</script>";   
                                
                                

                        
                            
                        }
                        
                        ?>
                            
                      <!--<div class="file_drag_area">
                            Drop you image here
                          
                           <div id="uploaded_file"></div>
                       
                        </div>
                    </div>
                            
                        <div id="uploaded_file"></div>
                       
                        </div>-->
                    <!--<div class='alert alert-danger'>
                    <strong>Opps!</strong> You have not added any Service, click the button below to add a Service.
                    </div>

                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                      <span class="glyphicon glyphicon-backward"></span> &nbsp; Click Here to Add A Service You can Render
                    </button>-->
    

                   
                </div>
            </div>
            </div>
</div>
               
     <!--footer-->
<?php include 'footer_user.php';  ?>
     
<!-- //footer-->
<script type="text/javascript" src="script.js"></script>

		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  
  </script>
<script>
$(document).ready(function () {
    $('.file_drag_area').on('dragover', function() {
        $(this).addClass('file_drag_over');
        return false;
    });
    
    $('.file_drag_area').on('dragleave', function () {
       $(this).removeClass('file_drag_over');
        return false;
    });
    
    $('.file_drag_area').on('drop', function (e) {
       e.preventDefault();
        $(this).removeClass('file_drag_over');
        var formData = new FormData();
        var file_list = e.originalEvent.dataTransfer.files;
        //console.log(file_list);
        for(var i=0; i<file_list.length; i++)
            {
                formData.append('file[]', file_list[i]);
            }
        
        //console.log(formData);
        
        $.ajax({
            url:"up.php",
            method:"POST",
            data:formData,
            contentType:false,
            processData: false,
            success:function(data){
                $('#uploaded_file').html(data);
            }
        })
    });
 
});
</script>			
</body>
</html>