<?php 
include 'config.php';


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
	} 

if(isset($_SESSION['email'])){
    
   // echo "Looged INN";
}else{
    //echo "Not Logged In";;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Lulois | Sellers and Buyers Chatting Site</title>
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
    ::-webkit-input-placeholder{
	color:#fff;
}

:-moz-placeholder { /* Firefox 18- */
   color: #fff; 
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #fff;  
}

:-ms-input-placeholder {  
   color: #fff;  
}
    </style>

</head>
<body>
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
<?php  include 'panel.php'; ?>
    
<div data-vide-bg="video/video">
    <div class="container">
		<div class="banner-info">
		<h4 style="color:white">Search Seller Shop &#9679; Easy and Fast</h4>	<br>		
			<div class="search-form">
				<form action="seller_shop.php" method="post">
                  
					<input type="text" placeholder="Search by Shop Name" value="" name="name" class="form-control input" required>
					<!--<input type="text" placeholder="Search..." name="itm_name" class="form-control input" required>-->
					<input type="submit" name="search" class="button" value="Search" >
                    
                   
				</form>
			</div>		
		</div>	
    </div>
</div> 

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

		
	</div>
	</div>
	</div>


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