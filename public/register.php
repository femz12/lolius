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
<title>Bizzallianz Buyer Registration</title>
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

<script type="text/javascript" src="reg_scripts.js"></script>

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

</head>
<body>
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
<?php include 'panel.php';  ?>
     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Buyer Register</h3>
		<h4><a href="index.php">Home</a><label>/</label>Buyer Registeration</h4>
		<div class="clearfix"> </div>
	</div>
</div>
    
    <div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Buyer Registeration</h3>
					<form action="" method="post" id="register-form">
                        
                        <div id="error">
        <!-- error will be showen here ! -->
        </div>
                        
                     
                               <div class="form-group">  
        <input type="text" class="form-control" placeholder="Enter Your Full Name" name="name" id="name" />
        </div>
           
           <div class="form-group">
        <input type="email" class="form-control" placeholder="Enter Your Email address" name="email" id="email" />
        <span id="check-e"></span>
        </div>
       
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Enter Your Password" name="password" id="password" />
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
        </div>
                        
         <div class="form-group">  
        <select name="gender" class="form-control" id="gender">
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
        </select>
        </div>
         
           
        <div class="form-group">  
        <input type="text" class="form-control" placeholder="Enter Your Address" name="biz_addr" id="biz_addr" />
        </div>
           
           <div class="form-group">  
           <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="phone" id="phone" />
        </div>
           
        
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> <span><a href="cus_login.php" class="btn btn-default btn-md pull-right">Login Here</a></span>
            
        </div>   
                    </form>
                    
            </div>
        </div>
    </div>
    
      
</div>

<!--login

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					<form action="#" method="post">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Username" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Confirm Password" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>-->
<!--footer-->
<?php include 'footer.php';  ?>
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
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

</body>
</html>