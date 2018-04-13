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
<title>Lolius | Get the best products at best prices</title>
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
    
    <script type="text/javascript">
    $(document).ready(function()
    {
        $("#loding1").hide();
        $("#loding2").hide();
        $("#device_type").change(function()
        {
            $("#loding1").show();
            var id=$(this).val();
            var dataString = 'id='+ id;
            $(".device_type").find('option').remove();
            $(".device_type").find('option').remove();
            $.ajax
            ({
                type: "POST",
                url: "get_brand.php",
                data: dataString,
                cache: false,
                success: function(html)
                {
                    $("#loding1").hide();
                    $(".state").html(html);
                } 
            });
        });
	
        $("#brand_name").change(function()
        {
            $("#loding2").show();
            var id=$(this).val();
            var dataString = 'id='+ id;
            $.ajax
            ({
                type: "POST",
                url: "get_model.php",
                data: dataString,
                cache: false,
                success: function(html)
                {
                    $("#loding2").hide();
                    $(".city").html(html);
                } 
            });
        });
    });
        
    </script>
    
    	<script type="text/javascript">
$(document).ready(function()
{
	$("#loding1").hide();
	$("#loding2").hide();
	$(".country").change(function()
	{
		$("#loding1").show();
		var id=$(this).val();
		var dataString = 'id='+ id;
		$(".state").find('option').remove();
		$(".city").find('option').remove();
        
		$.ajax
		({
			type: "POST",
			url: "get_state.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding1").hide();
				$(".state").html(html);
			} 
		});
	});
    
	
	
});
		</script>
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
            <h3>Discover tested and trusted experienced phone and laptop technicians that pickup, repair and deliver near you within 24hrs
</h3>	
		
			<div class="search-form">
				<form action="searchee.php" method="post">
                    
                    
				</form>
                
                <a href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal1" class="offer-img" >BUY PRODUCT</a>
                <a href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2" class="offer-img" >HIRE A TECHNICIAN</a>
			</div>		
		</div>	
    </div>
</div> 

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.vide.min.js"></script>

		
	</div>
	</div>
	</div>


	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								
								<div class="col-md-12 span-1 ">
									<h3>Buy Product</h3>
									<p class="in-para"> search  Phone or Laptop of your chioce, make order and lets deliver near you at a speed of light.</p>
									
									 <form action="searchee.php" class=" form-inline" method="post">
                                <div class="form-group">
                                    <input type="text" name="itm_name" class="form-control" placeholder="What are you looking for?">
                                </div>
                                <div class="form-group">
                                    <select name="itm_type" id="" class="form-control" required>
                                        <option>Select Condition</option>
                                        <option>New</option>
                                        <option>Used</option>
                                        <option>Refurblished</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="city" id="" class="form-control">
                                        <option>Select Your Location</option>
                                         <?php
                        $stmt = mysqli_query( $conn, "SELECT * FROM city");
                        //$stmt->execute();
                        while($row=mysqli_fetch_assoc($stmt))
                        {
                            ?>
                            <option value="<?php echo $row['name']; ?>" style="color:black"><?php echo $row['name']; ?></option>
                            <?php
                        } 
                    ?>
                                    </select>
                                </div>
                                <input type="submit" name="search" class="btn btn-default" value="Search">


                            </form>
                                    
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>

<!--   The part for technician hire  --->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModa2Label">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								
								<div class="col-md-10 col-md-offset-1 span-1 ">
									<h3>Hire A Technician</h3>
									<p class="in-para"> Hire the best technician around...</p> 
									
                    <form action="tech_search.php" method="post" id="register-formss">
				    <div id="error">
                    <!-- error will be showen here ! -->
                    </div>
                    
                    <div class="form-group">
                     <select name="device" id="device_type" class="form-control" required>
                        <option>What type of Device do you want to repair?</option>
                        <?php
                        $stmt = mysqli_query( $conn, "SELECT * FROM device");
                        //$stmt->execute();
                        while($row=mysqli_fetch_assoc($stmt))
                        {
                            ?>
                            <option value="<?php echo $row['id']; ?>" style="color:black"><?php echo $row['name']; ?></option>
                            <?php
                        } 
                        ?>
                    </select>
                    </div> 
                        
                        <div class="form-group">  
                        <select name="brand" class="form-control state" id="brand_name">
                        <option value="">What is the brand of your device?</option>
                        </select>
                        </div>
                    
                      
                    
                   <div class="form-group">
                     <input type="text" class="form-control" placeholder="Model of Device" name="model" id="" required />
                        </div>
                    
                    <div class="form-group">
                    <select name="fault" id="" class="form-control" required>
                        <option>What do you want to do on the device?</option>
                         <?php
                        $stmt = mysqli_query( $conn, "SELECT * FROM fault");
                        //$stmt->execute();
                        while($row=mysqli_fetch_assoc($stmt))
                        {
                            ?>
                            <option value="<?php echo $row['name']; ?>" style="color:black"><?php echo $row['name']; ?></option>
                            <?php
                        } 
                        ?>
                    </select>
                    </div>
                        
                     <div class="form-group">
                    <select name="duration" id="" class="form-control" required>
                        <option>How soon do you want the device to be repaired</option>
                         <?php
                        $stmt = mysqli_query( $conn, "SELECT * FROM duration");
                        //$stmt->execute();
                        while($row=mysqli_fetch_assoc($stmt))
                        {
                            ?>
                            <option value="<?php echo $row['name']; ?>" style="color:black"><?php echo $row['name']; ?></option>
                            <?php
                        } 
                        ?>
                    </select>
                    </div>
                   
                    <hr />
        
                   <div class="form-group">
                    <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                    <span class="glyphicon glyphicon-search"></span> &nbsp; Search
                    </button> 
                       
                       
                    </div>
                    
                    </form>
                                    
                     <div class="form-group">
                    
                    </div>
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>



<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Special Offers</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  <li class="active"><a href="#tab1" data-toggle="tab">Technician</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Products</a></li> 
					  
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
                              <?php 
        $get_cate = mysqli_query($conn, "SELECT * FROM tech_items ORDER BY id DESC LIMIT 12");
        while($row = mysqli_fetch_assoc($get_cate)){
        ?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="#" class="offer-img">
										<img src="<?php echo $row['pic'];  ?>" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
                                    <br>
                                    	<div class="women">
											<h6><?php echo $row['brand']; ?> <?php echo $row['device']; ?> </h6><br>
											<h6><a href="single.html"><b> Fault:</b>  <?php echo ($row['fault']);  ?></a></h6><br>	
										<h6><a href="single.html"><b> Service:</b> Repair or Replace <?php echo ($row['fault']);  ?></a></h6>	

										</div>
										<div class="mid-2">
											<p ><label></label><em class="item_price"><b>Price</b> &#8358; <?php echo number_format($row['price']);  ?></em></p>
											<div class="clearfix"></div>
										</div>
									
										<div class="add">
										   <a class="btn btn-success my-cart-btn"  href="hire_tech.php?prd_id=<?php echo $row['prd_id']; ?>">Hire Technician</a>
										</div>
										
									
								</div>
							</div>
                            
                            <?php } ?>
							
							<div class="clearfix"></div>
						 </div>
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
                            <?php 
                            $get_itm = mysqli_query($conn, "SELECT * FROM items ORDER BY id DESC LIMIT 12");
                            $product_count = mysqli_num_rows($get_itm);
                             while($rw = mysqli_fetch_assoc($get_itm)){
                            $biz_id = $rw['biz_id'];
                            $biz_add = $rw['biz_add'];
                            $itm_name = $rw['itm_name'];
                            $itm_price = $rw['itm_price'];
                            $itm_pic = $rw['itm_img'];
                            $itm_des = $rw['itm_des'];
                            $itm_cate = $rw['itm_cate'];
                            ?>
						<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img src="uploadz/<?php echo $rw['itm_img']; ?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="#"><?php echo $rw['itm_name']; ?></h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price">Price: &#8358; <?php echo $rw['itm_price']; ?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div><br>
                                            <p ><em class="item_price">Address: <?php echo $rw['biz_add']; ?></em></p>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <a href="detail.php?itm_id=<?php echo $rw['itm_id']; ?>" class="btn btn-success my-cart-btn" >View Details</a>
										</div>
									</div>
								</div>
							</div>
                            <?php } ?>
                            
							<div class="clearfix"></div>
						 </div>		  
					</div>
					
					
					</div>
				</div>
			</div>
		
	</div>
	
<!--content-->
<div class="content-mid">
	<div class="container">
		 <h2 class = "text-center">Popular Categories</h2><br>
		<div class="col-md-4 m-w3ls">
			<div class="col-md1 ">
				<a href="kitchen.html">
					<img src="img/nexus2cee_e4p1.png" class="img-responsive img" alt="">
					<div class="big-sa">
						<h6>Smart Collections</h6>
						<h3>Smart<span>Phones </span></h3>
						<p></p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls1">
			<div class="col-md ">
				<a href="hold.html">
					<img src="img/laptop1.png" class="img-responsive img" alt="">
					<div class="big-sale">
						<div class="big-sale1">
                            
							<h3>Laptops <span>Sale</span></h3>
							<p> </p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			<div class="col-md2 ">
				<a href="kitchen.html">
					<img src="img/accessories.png" class="img-responsive img1" alt="">
					<div class="big-sale2">
						<h3>Computer Accessories<span></span></h3>
						<p> </p>		
					</div>
				</a>
			</div>
		
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!--content--
	<div class="products">
		<div class="container">
            
            <h2 class = "text-center">Popular Categories</h2>
			<br>
				<div class=" con-w3l">
                    <?php $category = mysqli_query($conn, "SELECT * FROM cate ORDER BY category ASC");
                            while($row = mysqli_fetch_assoc($category)){
                    ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img src="admin/<?php echo $row['pics']; ?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="#"><?php echo $row['category']; ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><?php echo $row['count']; ?> items</p>
											 <!-- <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<p ><b>Locaction:</b><em class="item_price"> 9, balogun str, Ikeja</em></p>
											
											<div class="clearfix"></div>
										</div>
											<div class="add add-2">
										   <a href="browse.php?category=<?php echo $row['category']; ?>" class="btn btn-danger my-cart-btn my-cart-b">Browse Category</a>
										
										</div>
									</div>
								</div>
                    </div>
                    <?php } ?>
							
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>-->
	<div class="footer" style="background-color: #fff;">
	<div class="container">
		<div class="col-md-3 footer-grid">
		    <!--<img src="images/a1.png" class="img-responsive img1" alt="">-->
			<h4>Who We Are</h4><br>
			<p>Lolius.com is an e-commerce platform that helps users buy quality and affordable phones, laptops and accessories, and as well hire tested and trusted technicians that offer services at the best prices.</p>
		</div>
		<div class="col-md-3 footer-grid ">
		    <!--<img src="images/a2.png" class="img-responsive img1" alt="">-->
			
			<h4>What We Offer </h4><br>
			<p>Lolius mainly offer you due following diligent services and works; trusted phones and laptops stores verification, quality and affordable phones and laptops sourcing, fast home/office delivery, phones and laptops repair, and online shopping.
</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h4>Customer Services</h4><br>
				<p>Lolius mainly offer you due following diligent services and works; trusted phones and laptops stores verification, quality and affordable phones and laptops sourcing, fast home/office delivery, phones and laptops repair, and online shopping.
</p>
		</div>
		<div class="col-md-3 footer-grid">
			<h4>My Account</h4><br>
            <?php  
            
            ?>
				<p>Lolius mainly offer you due following diligent services and works; trusted phones and laptops stores verification, quality and affordable phones and laptops sourcing, fast home/office delivery, phones and laptops repair, and online shopping.
</p>
			</div>
		<div class="clearfix"></div>
			
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
  


</body>
</html>