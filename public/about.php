<?php 
include 'config.php';

/*
$Today = date('y:m:d',time());
			$new = date('l, F d, Y', strtotime($Today));
			$new;
	$get_info = mysqli_query($conn, "SELECT * FROM stat WHERE name = 'Homepage' AND date = '$new'");
	$get_info_count = mysqli_num_rows($get_info);
	if($get_info_count > 0){
		$Today = date('y:m:d',time());
		$new = date('l, F d, Y', strtotime($Today));
		$new;		
	$update = mysqli_query($conn, "UPDATE stat SET count = count + 1 WHERE name = 'Homepage' AND date = '$new'") or die(mysqli_error());
	}else{
			$Today = date('y:m:d',time());
			$new = date('l, F d, Y', strtotime($Today));
			$new;
		$newday = mysqli_query($conn, "INSERT INTO stat (name, count, date) VALUES ('Homepage', '1', '$new')") or die(mysqli_error());
	} */

if(isset($_SESSION['email'])){
    
   // echo "Looged INN";
}else{
    //echo "Not Logged In";;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Lolius | About Us</title>
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

</head>
<body>
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
<?php include 'panel.php';  ?>
 
  <!---->
    <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >About Lolius</h3>
		<h4><a href="index.php">Home</a><label>/</label>About Lolius</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- faqs -->
	<div class="about-w3 ">

			
			<!--about-->
			<div class="container">
		<div  class="about">
	<div class="spec ">
				<h3>About Lolius</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			
			<div class="col-md-4 about-right">
			<img class="img-responsive" src="images/ab.jpg" alt="">
			</div>
			<div class="col-md-4 about-left">
				<p>Lonius.com is a multinational online retail company which started in the city of Lagos, Nigeria's comercial hub. The company specialises in bringing retailers close to their end users for swift business transactions through its website and mobile application.		 
				
                At Lonius, we cover a wide range of multiple product categories such as electronics, fashion, food and beverages, motocycles, etc; which buyers can find hundreds of thousands in close proximity to them. Buyer also have the opportunity to chat directly with sellers and confirm the products availability from them before leaving to purchase it or making an home deleivery order.
                </p>
			</div>
			<div class="col-md-4 about-right">
			<img class="img-responsive" src="images/ab1.jpg" alt="">
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//about-->
	
	<!--work-experience--
	<div  class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3>Features</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<h5> Register </h5>
						<p><b>For Sellers:</b> Register your store  for free, list your products and sell directly from your phone or web to potential customers in your area or anywhere in the world						</p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<h5> Edit</h5>
						<p> <b>For Sellers:</b> Edit product images, prices and description, and list new products at any time</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> </span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<h5> Search</h5>
						<p><b>For Buyers:</b> Use filtered search to find exactly what u need from potential sellers in your
area or anywhere in the world						</p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<h5>Chat, Call, or Video  </h5>
						<p><b>For Sellers:</b> Remain connected online to always recieve message chat, voice or vidio call from potential customers
in your area or affar anytime and close deal.   						</p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> </span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<h5>Chat, Call, or Video  </h5>
						<p><b>For Buyers:</b> Chat, send voice or video call to potential sellers in your area or affar off and
confirm any product availability assurance before making an order, and save time.						</div>
					<span> </span>
				
				</div>
				
				<div class="clearfix"> </div>
					</div>
		</div>
	</div>
	<!--//work-experience-->
<!--advantages--> 
<div class="container">
	<div class="advantages">
			<div class="col-md-6 advantages-left ">
				<h3>Our Core Drives</h3>
				<div class="advn-one">
						<!--<div class="ad-mian">
							<div class="ad-left">
								<p>1</p>
							</div>
							<div class="ad-right">
								
								<h4><a href="single.html">Reason</a></h4>
								<p>Our lead founder and CEO, Jackson Osieboh connected with his like minded friends, Solomon 
								Oluwatobi, who is currently our CTO and Peter Eshoeblim, currently our ACTO to co-found bizallianz.com and help solve this hassle 
								of finding it so hard to find a close retail store that has the product one wants to buy 
								in stock at that very moment he/she needed it, before odering  for it or going there to 
								purchase it. Jack developed this passion to bring his friends together to solve this problem after so many times he visited a close
								retail store to buy products that he couldn't successfully get to purchase   as the result of limited knowledge he had about the exact 
								retail store in his area that   has 
								the product he wanted to buy in stock at that very point in time he needed it, And this had caused Jack wasted a lot of his precious time, 
								energy and money  ( transport fare).  </p>
							</div>
						
							<div class="clearfix"></div>
						</div>-->
						<div class="ad-mian">
							<div class="ad-left">
								<p>1</p>
							</div>
							<div class="ad-right">
								<h4><a href="#">Who we are</a></h4>
                                <p>Lolius is an online platform that help users source quality laptops and mobile phones from one-stop stores at the best prices. From buying all kind of quality laptops, mobile phones and accessories at the best affordable costs, Lolius assist you source it and deliver near you at a speed of light.</p>	</div>
							<div class="clearfix"></div>
						</div>
						<div class="ad-mian">
							<div class="ad-left">
								<p>2</p>
							</div>
							<div class="ad-right">
								<h4><a href="single.html">What Lolius offer you</a></h4>
								<p> Lolius mainly offer you due following diligent services and works; trusted phones and laptops stores verification, quality and affordable phones and laptops sourcing, fast home/office delivery, phones and laptops repair, and online shopping.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
			</div>
		<div class="col-md-6 advantages-left about-agi">
				<!--<h3>Users' Benefits</h3>-->
			<div class="advn-two">
						<h4><a href=""> How Lolius Benefits you</a></h4>
						<p></p>
						<ul>
							<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>To help you discover one-stop trusted phones and laptops stores that sell qualities at the best prices</a></li>
							<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>To help you for quality control, pickup and deliver near you at the speed of light, and save you more time, energy and cost</a></li>
							<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>To help you control the payment risk, stop you from professional business scammers or fraud</a></li>
							<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>To offer you additional 6 months product warranty to the initial period our recommended store partner you purchased from gave you</a></li>
							
						</ul>
			</div>
			<div class="advn-two">
						<h4><a href=""> Why Chose Lolius</a></h4>
						<p></p>
						<ul>
							<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>No mere goods return, Lolius team make sure the products delivered to your doorstep are up to your satisfaction</a></li>
							<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>No more online payment risk, Lolius make sure your online payment is 100%  secured and encourage easy business transaction for the both sellers and buyers</a></li>
							<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>No more delivery delay, Lolius make sure your goods doesn't exceed 24hours to be delivered to you nation wide</a></li>
							<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>No more buying fake phones, Lolius pickup agents make sure the goods delivering to you are original before delivered</a></li>
							<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i> No more short time warranty, Lolius make sure more warrant periods are given to you to ensure quality control and long term usage</a></li>
						</ul>
			</div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
	<!--advantages--> 

	</div>
	<!-- // Terms of use -->

<!--footer-->
<?php include 'footer.php'; ?>
    
    <!-- //footer-->

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