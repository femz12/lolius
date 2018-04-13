<?php 
include 'config.php';
if(isset($_SESSION['email'])){
   // echo "Looged INN";
}else{
    //echo "Not Logged In";;
}

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
    
    <div class="product">
		<div class="container">
			<div class="spec ">
                <?php 
                          $itm_cate = $_POST['itm_cate']; 
                          $biz_loc = $_POST['biz_loc']; 
                         $biz_lga = $_POST['biz_lga']; 
                         $sub_cate = $_POST['sub_cate']; 
                          $biz_add = $_POST['biz_add']; 
                         $web = $_POST['biz_bustop']; 


                        $get_lga = mysqli_query($conn, "SELECT * FROM states WHERE state_id = '$biz_loc'");
                                 $fet =mysqli_fetch_assoc($get_lga);
                                 $real_loc = $fet['name']; echo "<br>";

                        $get_lgas = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$itm_cate'");
                                 $fets =mysqli_fetch_assoc($get_lgas);
                              $real_locs = $fets['category']; echo "<br>";

                       // $search = mysqli_query($conn, "SELECT * FROM items WHERE itm_cate LIKE '%$real_locs%' AND sub_cate LIKE '%$sub_cate%' AND  AND biz_loc LIKE '%$real_loc%' AND biz_lga LIKE '%$biz_lga%' AND biz_add LIKE '%$biz_add%' AND biz_bustop LIKE '%$web%'  AND status = 'LIVE'");
                $search = mysqli_query($conn, "SELECT * FROM items WHERE itm_cate = '$real_locs' AND sub_cate = '$sub_cate' AND biz_loc = '$real_loc' AND biz_lga = '$biz_lga' AND biz_add LIKE '%$biz_add%' AND biz_bustop LIKE '%$WEBS%' AND status = 'LIVE'");
             
                       $search_count = mysqli_num_rows($search);
                
                if($search_count > 0){
                ?>

				<h3>There are <?php echo $search_count; ?> result for your location</i></h3>
                
                <?php }else{  ?>
                
                <h3>We couldn't find a result for your search, Here are items closer to you</i></h3>
            <?php    }  ?>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" con-w3l">
                           <?php 
                        $itm_cate = $_POST['itm_cate']; echo "<br>";
                          $biz_loc = $_POST['biz_loc']; echo "<br>";
                         $biz_lga = $_POST['biz_lga']; echo "<br>";
                         $sub_cate = $_POST['sub_cate']; echo "<br>";
                          $biz_add = $_POST['biz_add']; echo "<br>";
                         $web = $_POST['biz_bustop']; echo "<br>";
                        $get_lga = mysqli_query($conn, "SELECT * FROM states WHERE state_id = '$biz_loc'");
                                 $fet =mysqli_fetch_assoc($get_lga);
                                 $real_loc = $fet['name']; echo "<br>";

                        $get_lgas = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$itm_cate'");
                                 $fets =mysqli_fetch_assoc($get_lgas);
                              $real_locs = $fets['category']; echo "<br>";

                $search = mysqli_query($conn, "SELECT * FROM items WHERE itm_cate = '$real_locs' AND sub_cate = '$sub_cate' AND biz_loc = '$real_loc' AND biz_lga = '$biz_lga' AND biz_add LIKE '%$biz_add%' AND biz_bustop LIKE '%$web%' AND status = 'LIVE'");
                       $search_count = mysqli_num_rows($search);
                        if($search_count > 0){
                    while($row = mysqli_fetch_assoc($search)){
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
										   
										   <a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>" class="btn btn-danger my-cart-btn my-cart-b">Chat Seller</a>
										   <!--<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of16.png">Add to Cart</button>-->
										</div>
									</div>
								</div>
							</div>
                    <?php
                    
                    }
                        }
                    
                    ?>
            </div>
        </div>
    </div>
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