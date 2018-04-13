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

    //$get_item = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
            
      //      while($ro = mysqli_fetch_assoc($get_item)){
        //        $itm_id = $ro['t_code'];
        //    }

?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css" href = "css/style.css"/>
		<meta charset = "UTF-8" name= "viewport" content = "width=device-width, initial-scale=1" />
        
        <title>Lolius | Sellers Dashboard</title>
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
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>

<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript" >
       /* $(document).ready(function(){
            
           $('#post').click(function(){
               var tcode = $('#tcode').val();
               var status = $('#status').val();
               $.ajax({
                   method: "POST",
                   url: "update.php",
                   data: {tcode: tcode, staus:status},
                   
                   success: function(){
                       alert('DONE!!!');
                   }
                   
               })
           }) ;
        });*/
        </script>
	</head>
<body>
	<div class="header">

		<div class="container">
			
			<div class="logo">
				<a href="offer.html"><img src="images/p.png"  alt=""><br><span>Connecting buyers to close stores</span></a>
		</div>
			<div class="head-t">
				<ul class="card">
					
				</ul>	
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
							<li class=" active"><a href="user.php" class="hyper "><span>Home</span></a></li>	
							<li><a href="addcate.php" class="hyper"><span>Add Category</span></a></li>
							<li><a href="add.php" class="hyper"><span>Add Product</span></a></li>
							<li><a href="items.php" class="hyper"><span>View Product</span></a></li>
							<li><a href="note.php" class="hyper"><span>Chat Notification</span></a></li>
                            <li><a href="logout.php" class="hyper"><span>LogOut</span></a></li>
						
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
  <!---->

   <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Product List</h3>
		<h4><a href="user.php">Home</a><label>/</label>Product List</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>Product List</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cross').fadeOut('slow', function(c){
							$('.cross').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cross1').fadeOut('slow', function(c){
							$('.cross1').remove();
						});
						});	  
					});
			   </script>	
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cross2').fadeOut('slow', function(c){
							$('.cross2').remove();
						});
						});	  
					});
			   </script>	
 <table class="table ">
		  <tr>
			<th class="t-head">Products Image</th>
			<th class="t-head">Products Name</th>
             
			<th class="t-head">Price</th>
		  <th class="t-head">Quantity</th>

			<th class="t-head">Status</th>
			<th class="t-head">Action</th>
		  </tr>
     <?php 
     $email  = $_SESSION['email'];
     $get_product = mysqli_query($conn, "SELECT * FROM items WHERE biz_email = '$email'");
     while($roww = mysqli_fetch_assoc($get_product)){
     ?>
		  <tr class="cross">
			<td class="t-data">
				<a href="product.php?itm_id=<?php echo $roww['itm_id']; ?>" class="at-in">
					<img src="uploadz/<?php echo $roww['itm_img']; ?>" class="img-responsive" height="50" width="50" alt="">
				</a>
			
				
			 </td>
            
            <td class="t-data">
            <h5><?php echo $roww['itm_name']; ?></php></h5>
            </td>
			
            <td class="t-data">&#8358; <?php echo number_format($roww['itm_price']); ?></td>
			<td class="t-data"><div class="quantity"> 
								<div class="quantity-select">            
									<!--<div class="entry value-minus">&nbsp;</div>-->
										<div class="entry value"><span class="span-1"><?php echo $roww['itm_qty']; ?></span></div>									
									<!--<div class="entry value-plus active">&nbsp;</div>-->
								</div>
							</div>		
			</td>
            <?php 
            if($roww['status'] == 'ON'){ ?>
            <td class="t-data t-w3l"><a class="btn btn-warning btn-sm" href="#">ON HOLD</a></td>
            <?php
                
            }else if($roww['status'] == 'REJECT'){ ?>
            <td class="t-data t-w3l"><a class="btn btn-danger btn-sm" href="#">REJECTED</a></td>
            <?php
                
            }else if($roww['status'] == 'LIVE'){ ?>
                <td class="t-data t-w3l"><a class="btn btn-success btn-sm" href="#">ACCEPTED</a></td>
            <?php
            }
            
            ?>
            
            <td class="t-data"><a href="product.php?itm_id=<?php echo $roww['itm_id']; ?>" class="btn btn-primary btn-sm" >view Item</a></td>
			<!--<td class="t-data t-w3l"><a class="add-1" href="#">Add To Cart</a></td>-->
			
		  </tr>
     
     <?php } ?>
     
	</table>
		 </div>
		 </div>
		 				
	<!--quantity-->
			<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
			</script>
			<!--quantity-->
			

<!--footer-->
<?php include 'footer.php';  ?>
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
  <script type="text/javascript">

  </script>

</body>
</html>


?>