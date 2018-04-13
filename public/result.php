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
<title>Lolius | Search Result</title>
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
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
<?php include 'panel.php';  ?>
  <!--VIDEO BANNER
<div data-vide-bg="video/video">
    <div class="container">
		<div class="banner-info">
			<h3>It is a long established fact that a reader will be distracted by 
			the readable </h3>	
			<div class="search-form">
				<form action="#" method="post">
					<input type="text" name="search" placeholder="Search..." name="Search...">
					<input type="submit" value=" " >
				</form>
			</div>		
		</div>	
    </div>
</div>
-->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
	<div class="product">
		<div class="container">
			<div class="spec ">
                <?php 
                $itm_name = $_POST['itm_name'];
                $itm_name;
                  
  $itm_name = $_POST['itm_name']; echo "<br>";
  $itm_cate = $_POST['itm_cate']; echo "<br>";
  $biz_loc = $_POST['biz_loc']; echo "<br>";
  $biz_lga = $_POST['biz_lga']; echo "<br>";
  $sub_cate = $_POST['sub_cate']; echo "<br>";
  $biz_addr = $_POST['biz_addr']; echo "<br>";

$get_lga = mysqli_query($conn, "SELECT * FROM states WHERE state_id = '$biz_loc'");
         $fet =mysqli_fetch_assoc($get_lga);
          $real_loc = $fet['name'];

$get_lgas = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$itm_cate'");
         $fets =mysqli_fetch_assoc($get_lgas);
         $real_locs = $fets['category'];

                  $category = $_GET['category'];
                $search = mysqli_query($conn, "SELECT * FROM items WHERE itm_name LIKE '%$itm_name%' AND itm_cate LIKE '%$category%' AND biz_loc LIKE '%$real_loc%' AND biz_lga LIKE '%$real_lga%' AND biz_add LIKE '%$biz_addr%'  AND status = 'ON'");
    
              
               // $search = mysqli_query($conn, "SELECT * FROM items WHERE itm_name LIKE '%$itm_name%' AND itm_cate = '$category'");
                $search_count = mysqli_num_rows($search);
                ?>
				<h3>There are <?php echo $search_count; ?> result for <i><?php echo $itm_name; ?></i></h3>
				<!--<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>-->
			</div>
            
				<div class=" con-w3l">
                    <?php 
                                  
  $itm_name = $_POST['itm_name']; echo "<br>";
  $itm_cate = $_POST['itm_cate']; echo "<br>";
  $biz_loc = $_POST['biz_loc']; echo "<br>";
  $biz_lga = $_POST['biz_lga']; echo "<br>";
  $sub_cate = $_POST['sub_cate']; echo "<br>";
  $biz_addr = $_POST['biz_addr']; echo "<br>";

$get_lga = mysqli_query($conn, "SELECT * FROM states WHERE state_id = '$biz_loc'");
         $fet =mysqli_fetch_assoc($get_lga);
          $real_loc = $fet['name'];

$get_lgas = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$itm_cate'");
         $fets =mysqli_fetch_assoc($get_lgas);
         $real_locs = $fets['category'];

                 echo $category = $_GET['category'];
                $search = mysqli_query($conn, "SELECT * FROM items WHERE itm_name LIKE '%$itm_name%' AND itm_cate LIKE '%$category%' AND biz_loc LIKE '%$real_loc%' AND biz_lga LIKE '%$real_lga%' AND biz_add LIKE '%$biz_addr%'  AND status = 'ON'");
    
            $search_count = mysqli_num_rows($search);
                        if($search_count > 0){
                     //$search = mysqli_query($conn, "SELECT * FROM items WHERE itm_name LIKE '%$query%'");
                     //$search_count = mysqli_num_rows($search);
                    
                    //$get_product = mysqli_query($conn, "SELECT * FROM items");
                    while($row = mysqli_fetch_assoc($search)){
                    ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>" data-toggle="modal" data-target="#myModal17" class="offer-img">
										<img src="uploadz/upload/<?php echo $row['itm_img'] ?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>"><?php echo $row['itm_name']; ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><!--<label>$7.00</label>--><b>Price: </b><em class="item_price">$<?php echo $row['itm_price']; ?></em></p>
											  <div class="block">
                                                  
												<div class="starbox small ghosting"> </div>
											</div><br>
                                            
                                            <p ><b>Address: </b><em class="item_price"><?php echo $row['biz_add']; ?>, <?php echo $row['biz_loc']; ?></em></p>
											  
											<div class="clearfix"></div>
                                        </div>
											<div class="add add-2">
										   
										   <a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>" class="btn btn-danger my-cart-btn my-cart-b">Chat Seller</a>
										   <!--<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of16.png">Add to Cart</button>-->
										</div>
									</div>
								</div>
							</div>
                    <?php }
                        }else{ 
                        echo $category = $_GET['category'];
                        echo "<script>alert('No Match for search');</script>";
                        echo "<script>window.location = 'index.php';</script>";
                        
                        
                        
                        }?>
                    
						<div class="clearfix"></div>
				</div>
		</div>
	</div>
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