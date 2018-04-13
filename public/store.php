<?php 
include 'config.php';
if(isset($_SESSION['email'])){
    
   // echo "Looged INN";
}else{
    // echo "Not Logged In";;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Lolius | View of Shops</title>
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
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>

    <script type="text/javascript" src="cus_login_script.js"></script>

<script type="text/javascript" src="reg_script.js"></script>

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
    
    <script>
    $('document').ready(function()
{ 
	
	
	$("#back").click(function(){
		window.location.href = "shop.php";
	});
});
    </script>

</head>
<body>

</head>
<body>
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
<?php include 'panel.php';  
    
    $biz_name = $_GET['biz_name'];
    
    $select = mysqli_query($conn, "SELECT * FROM items WHERE biz_name = '$biz_name' ORDER BY id ASC");
    
    $sel_count = mysqli_num_rows($select);
    
       
    ?>
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Welcome to <i><?php echo $biz_name; ?>'s</i> Store</h3>
		<h4><a href="index.php">Home</a><label>/</label><?php echo $biz_name; ?></h4>
		<div class="clearfix"> </div>
	</div>
</div>
	
    
    
    <?php 
    
   $biz_name = $_GET['biz_name'];
    
     $search = mysqli_query($conn, "SELECT * FROM items WHERE biz_name = '$name' ORDER BY id ASC");
  echo $sel_count = mysqli_num_rows($select);
     if($sel_count > 0){  ?>
    
    	<div class="product">
		<div class="container">
			<div class="spec ">
				<h3><?php echo $biz_name; ?>'s Products </h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" con-w3l">
                    <?php 
                    $biz_name = $_GET['biz_name'];
                     $search = mysqli_query($conn, "SELECT * FROM items WHERE biz_name = '$name' ORDER BY id ASC");
    
                            while($row = mysqli_fetch_assoc($select)){
                    ?>
						<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>" data-toggle="modal" data-target="#myModal17" class="offer-img">
										<img src="uploadz/<?php echo $row['itm_img'] ?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>"><?php echo $row['itm_name']; ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><!--<label>$7.00</label>--><b>Price: </b><em class="item_price">&#8358; <?php echo number_format($row['itm_price']); ?></em></p>
											  <div class="block">
                                                  
												<div class="starbox small ghosting"> </div>
											</div><br>
                                            
                                            <p ><b>Address: </b><em class="item_price"><?php echo $row['biz_add']; ?>, <?php echo $row['biz_loc']; ?></em></p>
											  
											<div class="clearfix"></div>
                                        </div>
											<div class="add add-2">
										   
										   <a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>" class="btn btn-danger my-cart-btn my-cart-b">View Item</a>
										   <!--<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of16.png">Add to Cart</button>-->
										</div>
									</div>
								</div>
							</div>
                    <?php } ?>
							
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>
	
    <?php
         
     }else{
         
         ?>
     <div class="container">
    <div class='alert alert-danger'>
		
			<strong>Opps!</strong> You do not have any Product to display yet, click the button below to add a Product
    </div>
    
    <button class="btn btn-primary" id="back">
      <span class="glyphicon glyphicon-backward"></span> &nbsp; Click Here to Add Product
    </button>
    
</div>
    <br>
    <?php
     }
    
    ?>
    <!--content-->
<!--footer-->
<?php include 'footer.php'; ?>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
										
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