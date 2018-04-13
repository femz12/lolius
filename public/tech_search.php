

<?php 
include 'config.php';
if(isset($_SESSION['email'])){
   // echo "Looged INN";
}else{
    //echo "Not Logged In";;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Lolius | Enhancing Authentic Buying</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		
<!---//End-rate---->
<style>
    #pro{
       margin-bottom: 10px;
       background-color: bisque;
    }
    .pro-title{
        margin-top: 5px;
        margin-bottom: 5px;
        font-size: 20px;
        margin-left: 30px;
    }
</style>
</head>
<body>

<div class="header">

		<?php  include 'panel.php'; ?>		
</div>
 
<!--content-->
		<div class="products">
		<div class="container">
            <?php 
                         echo $device = $_POST['device']; 
                         echo $branch = $_POST['branch']; 
                         echo $model = $_POST['model']; 
                         echo $fault = $_POST['fault']; 
                         echo $duration = $_POST['duration']; 
            
            $get_device = mysqli_query($conn, "SELECT * FROM device WHERE id = '$device'");
                $get = mysqli_fetch_assoc($get_device);
                $device_name = $get['name'];

                $search = mysqli_query($conn, "SELECT * FROM tech_items WHERE device = '$device_name' AND branch = '$branch' AND model LIKE '%$model%' AND fault = '$fault' AND duration = '$duration'");
             
                      $search_count = mysqli_num_rows($search);
                
                if($search_count > 0){
                ?>
                <h2 class = "text-center">There are <?php echo $search_count; ?> result for your location</h2>
				
                
                <?php }else{  ?>
                <h2 class = "text-center">We couldn't find a result for your search, Here are items closer to you</h2>
            <?php    }  ?>
          <br>
            	<div class="singles">
                    <!-- This is the part to be replicated -->
                    <?php 
                    if($search_count > 0){
                    while($row = mysqli_fetch_assoc($search)){  ?>
			<div class="container">
                <div class="single-top-main">
	   		<div class="col-md-3 single-top">
	   		<div class="single-w3agile">
                <div id="picture-frame">
                    <img src="<?php echo $row['pic'] ?>" data-src="<?php echo $row['pic'] ?>" class="img-responsive" alt="">
		      </div>
			</div>
			</div>
			<div class="col-md-9 single-top-left ">
				<div class="single-right">
				<h3><?php echo $row['itm_name']; ?></h3> <p><?php echo $row['city']; ?></p>	
				 <div class="pr-single">
				  <p class="reduced ">&#8358; <?php echo number_format($row['itm_price']); ?></p>
				</div>
                <div class="block block-w3">
                    <div class="starbox small ghosting"> </div>
                </div>
				<p class="in-pa"><?php echo  $row['itm_des'];  ?></p>
                    
				<div class="add add-3">
				<?php echo $row['biz_name'];  ?>'s Store <br><br>
                </div>
                   
                    
                    
                    <a class="btn btn-default pull-right" href="detail.php?itm_id=<?php echo $row['itm_id']; ?>">Buy Product</a>
			<div class="clearfix"> </div>
			</div>
			</div>
	   </div>	
				 
				
	</div>
                    <br>
                    
                    <?php } } ?>
                    
                    <!-- This is the end of he replecation -->
                    
                    
                    			
</div>
            
            
          
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>
<!--footer-->
<?php  include 'footer.php'; ?><!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  

  
  
  			
</body>
</html>