<!DOCTYPE html>
<html>
<head>
<title>Lolius Buyer Registration</title>
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

<script type="text/javascript" src="reg_script.js"></script>

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
		
<!---//End-rate---->
    
    <script type="text/javascript">
$('document').ready(function()
{ 
	window.setTimeout(function(){
									
		window.location.href = "logins.php";
										
	}, 20000);
	
	
	$("#back").click(function(){
		window.location.href = "index.php";
	});
});
</script>

</head>
<body>

</head>
<body>
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
<div class="header">

		<div class="container">
			
			<div class="logo">
				<a href="index.php"><img src="images/biz6.jpg"  alt=""><br><span>Sellers & Buyers Chatting Site</span></a>
		</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="#" ><i class="fa fa-heart" aria-hidden="true"></i>About Us</a></li>
					<li><a href="logins.php" ><i class="fa fa-user" aria-hidden="true"></i>Buyer Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Buyer Registeration</a></li>
					<!--<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>-->
					<li><a href="#" ><i class="fa fa-phone" aria-hidden="true"></i>Contact Us</a></li>
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
							<li><a href="index.php" class="hyper"><span>Home</span></a></li>	
							
							
                            <li><a href="other.php" class="hyper"><span>How To Buy</span></a></li>
                            <li><a href="other.php" class="hyper"><span>How To Sell</span></a></li>
                           
							<?php  
                            if(isset($_SESSION['email'])){

                                }else{ ?>
                            <li><a href="sup_reg.php" class="hyper"><span>Become A Seller</span></a></li>	                        
                                
                                <?php
   /// echo "Not Logged In";
}
                            ?>	
							
						</ul>
					</div>
					</nav>
					<div class="cart" >
					
						<span class="fa fa-users "><span></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>



    <div class="banner-top">
	<div class="container">
		<h3 >Successful Registration</h3>
		<h4><a href="index.php">Home</a><label>/</label>Registration Completed</h4>
		<div class="clearfix"> </div>
	</div>
</div>
    
    <br><br>
<div class="signin-form">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Success!</strong>  Registration Successful.....An Email Confirmation has been sent to the Email address you provided. Please Confirm Your Email.
    </div>
    
    <button class="btn btn-primary" id="back">
      <span class="glyphicon glyphicon-backward"></span> &nbsp; Continue Shopping!
    </button>
    
    </div>

</div>
    <br><br><br>
    
    <?php include 'footer.php'; ?>

</body>
</html>