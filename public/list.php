<?php 
if(isset($_SESSION['email'])){    
   // echo "Looged INN";
}else{
    // echo "Not Logged In";;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Lolius | List of Shops</title>
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
<!--js -->
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
    
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
<?php 
    
    include 'panel.php';  
    
   $category = $_POST['category'];
   $sub_cate = $_POST['sub_cate'];
    
    $se = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$category'");
    $rop = mysqli_fetch_assoc($se);
    $cate_name = $rop['category'];
    
    $select = mysqli_query($conn, "SELECT * FROM items WHERE itm_name = '$itm_name' ORDER BY id ASC");
    
   //echo $sel_count = mysqli_num_rows($select);
       
    ?>
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 ><i><?php echo $cate_name; ?></i></h3>
		<h4><a href="index.php">Home</a><label>/</label><?php echo $cate_name; ?><label>/</label><?php echo $sub_cate; ?></h4>
		<div class="clearfix"> </div>
	</div>
</div>
    <?php 
  $category = $_POST['category'];
   $sub_cate = $_POST['sub_cate'];
    
    $se = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$category'");
    $rop = mysqli_fetch_assoc($se);
    $cate_name = $rop['category'];
    
     $select = mysqli_query($conn, "SELECT * FROM items WHERE itm_cate = '$cate_name' AND sub_cate = '$sub_cate' ORDER BY id ASC");
   $sel_count = mysqli_num_rows($select);
     if($sel_count > 0){  ?>
    
    	<div class="product">
		<div class="container">
			<!--<div class="spec ">
				<h3><?php echo $name; ?></h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>-->
            <h3 class="text-center">There are <?php echo $sel_count ?> for your search</h3>
				<div class=" con-w3l">
                    <?php 
                   $category = $_POST['category'];
                   $sub_cate = $_POST['sub_cate'];

                    $se = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$category'");
                    $rop = mysqli_fetch_assoc($se);
                   
                    $cate_name = $rop['category'];

                    $select = mysqli_query($conn, "SELECT * FROM items WHERE itm_cate = '$cate_name' AND sub_cate = '$sub_cate' ORDER BY id ASC");
                    while($row = mysqli_fetch_assoc($select)){
                    ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
										<img src="uploadz/<?php echo $row['itm_img']; ?>" class="img-responsive" alt="">
										<!--<div class="offer"><p><span>Offer</span></p></div>-->
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="view_items.php?itm_id=<?php echo $row['itm_id'] ?>"><?php echo $row['itm_name'] ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><!--<label>$7.00</label>--><b>Price: </b><em class="item_price">&#8358; <?php echo $row['itm_price']; ?></em></p>
											  <div class="block">
                                                  
												<div class="starbox small ghosting"> </div>
											</div><br>
                                            
                                            <p ><b>Address: </b><em class="item_price"><?php echo $row['biz_add']; ?>, <?php echo $row['biz_loc']; ?></em></p>
											  
											<div class="clearfix"></div>
										</div>
											<div class="add">
										    <a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>" class="btn btn-danger my-cart-btn my-cart-b">View Seller</a>
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
     <div class="product">
		<div class="container">
			<!--<div class="spec ">
				<h3><?php echo $name; ?></h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>-->
            <?php 
             $category = $_POST['category'];
                   $sub_cate = $_POST['sub_cate'];

                    $se = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$category'");
                    $rop = mysqli_fetch_assoc($se);
                   
                    $cate_name = $rop['category'];
            ?>
            <h3 class="text-center">Sorry wouldn't find product in <i><b><?php echo $cate_name; ?></b></i> category and <i><b><?php echo $sub_cate ?></b></i> Subcategory.<br> Below are products Under <i><b><?php echo $cate_name; ?></b></i> category</h3><p>
				<div class=" con-w3l">
                    <?php 
                   $category = $_POST['category'];
                   $sub_cate = $_POST['sub_cate'];

                    $se = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$category'");
                    $rop = mysqli_fetch_assoc($se);
                   
                    $cate_name = $rop['category'];

                    $select = mysqli_query($conn, "SELECT * FROM items WHERE itm_cate = '$cate_name' ORDER BY id ASC");
                    while($row = mysqli_fetch_assoc($select)){
                    ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
										<img src="uploadz/<?php echo $row['itm_img']; ?>" class="img-responsive" alt="">
										<!--<div class="offer"><p><span>Offer</span></p></div>-->
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="view_items.php?itm_id=<?php echo $row['itm_id'] ?>"><?php echo $row['itm_name'] ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><!--<label>$7.00</label>--><b>Price: </b><em class="item_price">&#8358; <?php echo $row['itm_price']; ?></em></p>
											  <div class="block">
                                                  
												<div class="starbox small ghosting"> </div>
											</div><br>
                                            
                                            <p ><b>Address: </b><em class="item_price"><?php echo $row['biz_add']; ?>, <?php echo $row['biz_loc']; ?></em></p>
											  
											<div class="clearfix"></div>
										</div>
											<div class="add">
										    <a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>" class="btn btn-danger my-cart-btn my-cart-b">View Seller</a>
										</div>
									</div>
								</div>
							</div>
                    <?php } ?>					
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>
    <br>
    <?php
     }
    ?>
    <!--content-->
<!--footer-->
<?php include 'footer.php'; ?>
<!-- //footer-->

	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
</body>    
</html>

    