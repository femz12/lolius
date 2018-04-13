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

    $get_item = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
            
            while($ro = mysqli_fetch_assoc($get_item)){
                $itm_id = $ro['t_code'];
            }

?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css" href = "css/style.css"/>
		<meta charset = "UTF-8" name= "viewport" content = "width=device-width, initial-scale=1" />
        
        <title>Lolius | Sellers Product Preview</title>
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
        $(document).ready(function(){
            
           $('#post').click(function(){
               var tcode = $('#tcode').val();
               var status = $('#status').val();
               var itm_pic = $('#itm_pic').val();
               $.ajax({
                   method: "POST",
                   url: "update.php",
                   data: {tcode: tcode, status:status, itm_pic: itm_pic },
                   
                   success: function(){
                       //alert('WORKING!!!!!!!!');
                     window.location='items.php';
                   }
                   
               })
           }) ;
        });
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
					<li><a href="about.html" ><i class="fa fa-heart" aria-hidden="true"></i>About Us</a></li>
					<!--<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>-->
					<li><a href="shipping.html" ><i class="fa fa-phone" aria-hidden="true"></i>Contact Us</a></li>
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
		<h3 >Product</h3>
		<h4><a href="user.php">Home</a><label>/</label>View Product</h4>
		<div class="clearfix"> </div>
	</div>
</div>
		<div class="single">
			<div class="container">
<div class="single-top-main">
    <?php 
    $get_item = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
            
            while($ro = mysqli_fetch_assoc($get_item)){
              $itm_id = $ro['t_code'];
            }
    
    $itm_id = $_GET['itm_id'];
    $itm_id = $_GET['itm_id'];
    
    $get_img = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
    while($rw = mysqli_fetch_assoc($get_img)){

    ?>
	   		<div class="col-md-4 single-top">
	   		<div class="single-w3agile">
							
<div id="<?php echo $rw['id']; ?>">
			<img src="uploadz/<?php echo $rw['itm_img']; ?>" data-src="uploadz/<?php echo $rw['itm_img']; ?>" alt="" class="img-responsive"/>
		</div>
										<script src="js/jquery.zoomtoo.js"></script>
								<script>
			$(function() {
				$("#<?php echo $rw['id']; ?>").zoomToo({
					magnify: 0.5
				});
			});
		</script>
		
		
		
			</div>
			</div>
    
    
    <?php } ?>
            
            
                            
                            
			<div class="col-md-8 single-top-left ">
                <div class="single-right">
                                    
                <?php 
                $get_op = mysqli_query($conn, "SELECT * FROM items WHERE biz_email = '$email' AND itm_id = '$itm_id'"); 
                while($rop = mysqli_fetch_assoc($get_op)){
                    $itm_name = $rop['itm_name'];
                    $itm_price = $rop['itm_price'];
                    $itm_des = $rop['itm_des'];
                    $itm_spec = $rop['itm_spec'];
                }                    
                ?>
				<h3><?php echo $itm_name; ?></h3>
				
					
				 <div class="pr-single">
				  <p class="reduced "><!--<del>$10.00</del>-->$<?php echo number_format($itm_price); ?></p>
				</div>
				<div class="block block-w3">
					<div class="starbox small ghosting"> </div>
				</div>
                    <h4>Description</h4>
				<p class="in-pa"><?php echo $itm_des; ?> </p>
			   	
                    <h4>Specification</h4>
				<p class="in-pa"><?php 
                    if($itm_spec == ''){
                        echo "Non";
                    }else{
                    echo $itm_spec; } ?> </p>
			   	
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
					<div class="add add-3">
                        <input type="hidden" id="status">
                        <input type="hidden" id="tcode">
                        <input type="hidden" id="itm_pic">
                        <!--<input  type="submit" class="btn btn-danger my-cart-btn my-cart-b" id="post"  value="Post Item">  -->
                      <button  class="btn btn-danger my-cart-btn my-cart-b" data-toggle="modal" data-target="#myModal2">Edit Item</button>
                                               
				</div>
			
			<div class="clearfix"> </div>
			</div>
		 

			<br><br><br>
	   </div>	
				 
				
	</div>
</div>
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

				<!-- product -->
			
</body>
</html>
    
    <script type="text/javascript" >
        $(document).ready(function(){
            
           $('#btn-edit').click(function(){
               var itm_id = $('#itm_id').val();
               var itm_name = $('#itm_name').val();
               var itm_price = $('#itm_price').val();
               var itm_qty = $('#itm_qty').val();
               var itm_type = $('#itm_type').val();
               var itm_size = $('#itm_size').val();
               var itm_spec = $('#itm_spec').val();
               var itm_des = $('#itm_des').val();
               $.ajax({
                   method: "POST",
                   url: "edit_item.php",
                   data: {itm_id: itm_id, itm_name: itm_name, itm_price: itm_price, itm_qty: itm_qty, itm_type: itm_type, itm_size: itm_size, itm_spec: itm_spec, itm_des: itm_des },
                   
                   success: function(){
                       alert('You have Successfully Update the Item');
                     window.location='items.php';
                   }
                   
               })
           }) ;
        });
        </script>
    
    
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<?php  
                            $itm_id = $_GET['itm_id']; 
                            $get = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
                            while($fet = mysqli_fetch_assoc($get)){
                                $name = $fet['itm_name'];
                                $price = $fet['itm_price'];
                                $qty = $fet['itm_qty'];
                                $size = $fet['itm_size'];
                                $spec = $fet['itm_spec'];
                                $des = $fet['itm_des'];
                                $type = $fet['itm_type'];
                                $cate_name = $fet['itm_cate'];
                                $img = $fet['itm_img'];
                            }
                            ?>
                            <div class="col-md-4">
                            <img src="uploadz/<?php echo $img ?>" class="img-responsive"><br>
                                <a href="uploadz/edit.php?itm_id=<?php echo $itm_id; ?>" class="btn btn-default btn-md">Edit Image Here!</a>
                            </div>
            <div class="col-md-8">
            <h3>Edit Item </h3>
        <form action="" method="post">
            <input type="hidden" name="itm_id" value="<?php echo $itm_id; ?>">
        <div class="form-group">  
        <input type="text" class="form-control" value="<?php echo $name; ?>" name="itm_name" id="itm_name" />
        </div>
                        
        <div class="form-group">  
        <input type="text" class="form-control" value="<?php echo $price; ?>" name="itm_price" id="itm_price" />
        </div>
        
                        
        <div class="form-group">  
        <input type="text" class="form-control" value="<?php echo $qty; ?>" name="itm_qty" id="itm_qty" />
        </div>
                        
         <div class="form-group">  
        <select name="itm_type" class="form-control" id="itm_type">
        <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
        <option>New</option>
        <option>Used</option>
       
        </select>
        </div>

        <?php if($cate_name == 'Fashion'){ ?>
           
        <div class="form-group">  
        <select name="itm_size" class="form-control" id="itm_size">
        <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>
        <option>XXL</option>
        </select>
        </div>
        <?php }elseif($cate_name == 'Electronics/Appliances' || $cate_name == 'Computer/Accessories' || $cate_name == 'Mobiles' ){ ?>
             <div class="form-group">  
            <textarea name="itm_spec" class="form-control" id="itm_spec" cols="5" value="<?php echo $des; ?>"></textarea>
       <!-- <input type="text" class="form-control" placeholder="Business Address" name="biz_addr" id="phone" />-->
        </div>           
        <?php
        } 
        ?>
           
        
           
        <div class="form-group">  
            <textarea name="itm_des" class="form-control" id="itm_des" cols="5" placeholder = "Brief Description of the item"></textarea>
     
        </div>
        <div class="add-to">
		 <input type="submit" class="btn btn-success my-cart-btn my-cart-btn" name="submit" id="btn-edits" value="Update Item" >
            </div>
                                </form>									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
    
    <?php  
    if(isset($_REQUEST['submit'])){
        $itm_id = $_POST['itm_id'];
$itm_name = $_POST['itm_name'];
$itm_price = $_POST['itm_price'];
$itm_qty = $_POST['itm_qty'];
$itm_size = $_POST['itm_size'];
$itm_spec = $_POST['itm_spec'];
$itm_des = $_POST['itm_des'];
$itm_type = $_POST['itm_type'];
    
$update = mysqli_query($conn, "UPDATE items SET itm_name = '$itm_name', itm_price = '$itm_price', itm_qty = '$itm_qty', itm_size = '$itm_size', itm_spec = '$itm_spec', itm_des = '$itm_des', itm_type = '$itm_type'  WHERE itm_id = '$itm_id'");
    echo "<script>alert('You have Successfully Update the Item');
                     window.location='items.php';</script>";
    }
    
    ?>