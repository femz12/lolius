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

?>
<!DOCTYPE html>
<html>
<head>
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
    
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
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
	<script type="text/javascript">
    $(document).ready(function(){
       
        $('#add_cate').click(function(){
            alert('Working');
            var varcatname = $('#cate_name').val();
            var varcatid = $('#cate_id').val();
            var varcatimg = $('#cate_img').val();
            var varuser = $('#user').val();
          
            $.ajax({
                method: 'POST',
                url: 'ad_cate.php',
                data: {cate_name: varcatname, cate_id: varcatid, cate_img: varcatimg, user: varuser},
                
                })
        });
       
    });
    
    </script>

</head>
<body>
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
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
	<div class="container"><br>
		<h3>Add Category</h3>
		<h4><a href="user.php">Home</a><label>/</label>Add Category</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

    <div class="container "><br>
	<div class="kic ">
			<h3>Add Category Products You would be selling</h3>
			
		</div>
        <?php 
        $get_cate = mysqli_query($conn, "SELECT * FROM cate");
        
        while($row = mysqli_fetch_assoc($get_cate)){
        ?>
		<div class="col-md-3 kic-top1">
			<a href="#">
				<img src="admin/<?php echo $row['pics'];  ?>" class="img-responsive" alt="">
			</a>
			<h6><?php echo $row['category'];  ?></h6>
			
            <form action="" method="post">
            <input type="hidden" name="cate_name" id="cate_name" value="<?php echo $row['category'];  ?>">
            <input type="hidden" name="cate_img" id="cate_img" value="<?php echo $row['pics'];  ?>">
            <input type="hidden" name="cate_id" id="cate_id" value="<?php echo $row['id'];  ?>">
            <input type="hidden" name="user" id="user" value="<?php echo $email;  ?>">
                <a href="ad_cate.php?id=<?php echo $row['id']; ?>" class="btn btn-default">Add category</a>
            </form>
		</div>
		
        <?php  } ?>
       
	</div>
    <br>

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