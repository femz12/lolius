<?php 
include 'config.php';
//include 'main_header.php';

$itm_id = $_GET['itm_id'];
 
$email = $_SESSION['email'];

$itm_id = $_GET['itm_id'];

$get_itm = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");

$rw = mysqli_fetch_assoc($get_itm);

$biz_email = $rw['biz_email'];
$item_cate = $rw['itm_cate'];

$get_itms = mysqli_query($conn, "SELECT * FROM business WHERE email = '$biz_email'");

$row = mysqli_fetch_assoc($get_itms);

$biz_name = $row['name'];
$biz_loc = $row['biz_loc'];
$biz_addr = $row['biz_addr'];


$get_itm = mysqli_query($conn, "SELECT * FROM user WHERE email = '$biz_email'");

$row = mysqli_fetch_assoc($get_itm);

$email = $row['email'];
 
if(isset($_SESSION['email'])){
    
   // echo "Looged INN";
}else{
    // echo "Not Logged In";;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Lolius | View Items</title>
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
<link href="chat_style.css" rel="stylesheet" type="text/css" />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>

    <script type="text/javascript" src="cus_login_script.js"></script>

<script type="text/javascript" src="reg_script.js"></script>
<script type="text/javascript" src="chat_script.js"></script>
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
	</head>
<body>

</head>
<body>
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
<?php include 'panel.php';  ?>
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 ><?php echo $biz_name; ?>'s Store</h3>
		<h4><a href="index.php">Home</a><label>/</label><?php echo $biz_name; ?></h4>
		<div class="clearfix"> </div>
	</div>
</div>
   
		<div class="single">
			<div class="container">
               
            <div class="single-top-main">
	   		<div class="col-md-5 single-top">
	   		<div class="single-w3agile">
                <?php 
                $itm_id = $_GET['itm_id'];
                $hit = mysqli_query($conn, "UPDATE items SET itm_hit = itm_hit + 1 WHERE itm_id = '$itm_id'");
                $get_itm = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
                $rw = mysqli_fetch_assoc($get_itm);
                $biz_id = $rw['biz_id'];
                $itm_name = $rw['itm_name'];
                $itm_price = $rw['itm_price'];
                $itm_pic = $rw['itm_img'];
                $itm_des = $rw['itm_des'];
                $itm_cate = $rw['itm_cate'];
                $city = $rw['city'];
                $itm_spec = $rw['itm_spec'];
                ?>
        <div id="picture-frame">
			<img src="uploadz/<?php echo $itm_pic; ?>" data-src="uploadz/<?php echo $itm_pic; ?>" alt="" class="img-responsive"/>
		</div>
        <script src="js/jquery.zoomtoo.js"></script>
		<script>
			$(function() {
				$("#picture-frame").zoomToo({
					magnify: 1
				});
			});
		</script>
		</div>
		</div>
        <div class="col-md-7 single-top-left ">
                <div class="single-right">
				<h3><?php echo $itm_name; ?></h3>
				 <div class="pr-single">
				  <p class="reduced "><!--<del>$10.00</del>-->&#8358;<?php echo number_format($itm_price); ?></p>
				</div>
                    <p>Product Description</p>
				<p class="in-pa"> <?php echo $itm_des; ?> </p>
                    <p>Product Specification</p>  
                    <p class="in-pa"> <?php if($itm_spec == ''){
                        echo "No Specifition for the product"; 
                        }else{
                        echo $itm_spec;
                        } ?> </p>
                    <h6><form method="post" action="">
                        <div class="form-group">
                            <label>Select Quantity</label>
                        <select class="form-control" name="qty" >
                            <?php 
                            $itm_id = $_GET['itm_id'];
                            $get_qty = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
                            while($rowss = mysqli_fetch_assoc($get_qty)){ ?>
                                
                               <option>1</option> 
                               <option>2</option> 
                               <option>3</option> 
                               <option>4</option> 
                               <option>5</option> 
                          <?php  }
                            ?>   
                        </select>
                        </div>
                    <?php $itm_id = $_GET['itm_id']; ?>       
			<div class="clearfix"> </div>
			</div>
	   </div>
	</div>
</div>
            <hr>
         <!--<div class="kic-tops ">
	<div class="container ">
	<div class="kic">
			<h3>Recommended Logistic Services</h3>
		</div>
        <?php
        $city;
        $get_logistics = mysqli_query($conn, "SELECT * FROM logistic WHERE location = '$city'");
        while($roes = mysqli_fetch_assoc($get_logistics)){
        ?>
		<div class="col-md-4 kic-top1">
			<a href="">
				<img src="admin/<?php echo $roes['pic']; ?>" class="img-responsive" alt="">
			</a>-->
			<h6><form method="post" action="">
                <!--<input type="hidden" name="id[]" value="<?php echo $roes['id']; ?>">&nbsp;&nbsp;<?php echo $roes['name']; ?>
                </h6>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#8358; <?php echo number_format($roes['loc_price']); ?></p>-->
           
        <?php } ?>
        <div class="container">
        <div class="col-md-12">
            <input type="hidden" name="itm_id" value="<?php echo $itm_id; ?>">
            <input type="hidden" name="itm_name" value="<?php echo $itm_name; ?>">
            <input type="hidden" name="itm_price" value="<?php echo $itm_price; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="location" value="<?php echo $city; ?>">
            
            <?php 
            if($_SESSION['email']){
            $itm_id = $_GET['itm_id']; 
            ?>
            <input type="submit" name="subm" class="btn btn-success pull-right" value="Continue With Order">    
            <!--<a href="order.php?itm_id=<?php echo $itm_id; ?>" class="btn btn-default"><b>Select <?php echo $roes['name']; ?></b></a>-->
        
        <?php }else{ ?>
                                 <a href="#" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal1" class="offer-img" >Login to Continue with Order</a>    
        
        <?php } ?>
      
            </form>
            </div>
        </div>
                </div>
	</div>
             <br><br>
</div>
<!--footer-->
<?php include 'footer.php';   ?>
<!-- //footer-->

<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</html>
    
    <?php 
    $id = "id";
    $id = $_POST['id']; 
    if(isset($_REQUEST['subm'])){
        $itm_name = $_POST['itm_name'];
        $itm_price = $_POST['itm_price'];
        $email = $_POST['email'];
        $itm_id = $_POST['itm_id'];
        $itm_qty = $_POST['itm_qty'];
        $location = $_POST['location'];
        
      //  if($id == 0){
        //    echo "<script>alert('You have not Selected A Logistic Service')</script>";
        //}else{
            $imp = implode(",", $id);
            $get_logistics = mysqli_query($conn, "SELECT * FROM logistic WHERE id IN (".$imp.")");
            $get = mysqli_fetch_assoc($get_logistics);
            $name = $get['name'];
            $ids = $get['id'];
            $loc = $get['location'];
            $loc_price = $get['loc_price'];
            $int_price = $get['int_price'];
            
            if($location == $loc){
                $price = $loc_price;
            }else{
                $price = $int_price;
            }
            
            $insert_orders = mysqli_query($conn, "INSERT INTO orders (itm_id, itm_name, itm_price, email, log_id, name, price, location, itm_destination) VALUES ('$itm_id', '$itm_name', '$itm_price', '$email', '$ids', '$name', '$price', '$location', '$loc')");
            if($insert_orders){
                //echo "<script>window.location='staff_duty.php?id=".$staff_index."'</script>";
            echo "<script>window.location = 'order.php?itm_id=".$itm_id."'</script>";
            }else{
           
          //  }
        }

    }
    
    ?>
       
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								
								<div class="col-md-8 col-md-offset-2 ">
                                   
                                   		<?php 
                                    $itm_id = $_GET['itm_id'];
                                    $get_itm = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
                                    $rw = mysqli_fetch_assoc($get_itm);
                                    $biz_id = $rw['biz_id'];
                                    $biz_name = $rw['biz_name'];
                                    $biz_email = $rw['biz_email'];
                                   $itm_name = $rw['itm_name'];
                                    $itm_price = $rw['itm_price'];
                                    $itm_pic = $rw['itm_img'];
                                    $itm_des = $rw['itm_des'];
                                    $itm_cate = $rw['itm_cate'];
                                    
                                    $get_num = mysqli_query($conn, "SELECT * FROM business WHERE email = '$biz_email'");
                                    
                                    $fet = mysqli_fetch_assoc($get_num);
                                    $seller_number = $fet['phone'];
                                                
                                                ?>
                                <h4 class="quick text-center">Contact for <?php echo $biz_name; ?>'s Store</h4><br><br>
                                    <h2 class="text-center"><?php  echo $seller_number; ?></h2>
								</div>
								<div class="clearfix"> </div>
				        </div>
						</div>
					</div>
				</div>
    
    
    
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
                <?php 
                $itm_id = $_GET['itm_id'];
                //$hit = mysqli_query($conn, "UPDATE items SET itm_hit = itm_hit + 1 WHERE itm_id = '$itm_id'");
                $get_itm = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
                $rw = mysqli_fetch_assoc($get_itm);
                $biz_id = $rw['biz_id'];
               $itm_name = $rw['itm_name'];
                $itm_price = $rw['itm_price'];
                $itm_pic = $rw['itm_img'];
                $itm_des = $rw['itm_des'];
                $itm_cate = $rw['itm_cate'];
                                                
                                                ?>
                                                <h4><?php echo $itm_name; ?></h4><br>
											<div class="item">
                                                
												<img src="uploadz/<?php echo $itm_pic; ?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
                                    <h4 class="quick">Buyer Login</h4><br>
                                   <form action="" method="post" id="register-form">
						<div id="error">
        <!-- error will be showen here ! -->
        </div>
           
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" id="email" />
        <span id="check-e"></span>
        </div>
       
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>
        <input type="hidden" name="pat" id="pat" value="<?php echo $itm_id = $_GET['itm_id'];  ?>">
           
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login To Account
			</button> <span><a href="#" data-toggle="modal" data-target="#myModal2" class="btn btn-default btn-md pull-right">SignUp Here</a></span>
            
        </div>
					</form>						
								</div>
								<div class="clearfix"> </div>
				        </div>
						</div>
					</div>
				</div>
    
    
    <!-- Second reg modal  --->
    
    
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
                <?php 
                $itm_id = $_GET['itm_id'];
                //$hit = mysqli_query($conn, "UPDATE items SET itm_hit = itm_hit + 1 WHERE itm_id = '$itm_id'");
                $get_itm = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
                $rw = mysqli_fetch_assoc($get_itm);
                $biz_id = $rw['biz_id'];
                $itm_name = $rw['itm_name'];
                $itm_price = $rw['itm_price'];
                $itm_pic = $rw['itm_img'];
                $itm_des = $rw['itm_des'];
                $itm_cate = $rw['itm_cate'];
                $biz_name = $rw['biz_name'];
                                                
                ?>
                                                <h4><?php echo $itm_name; ?></h4><br>
											<div class="item">
												<img src="uploadz/<?php echo $itm_pic; ?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
                                    <h4 class="quick">Buyer Registration</h4><br>
                                   <form action="" method="post" id="register-forms">
                        
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
        
        <!--<div class="form-group">
        <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
        </div>-->
                        
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
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submits">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> 
            <!--<span><a href="cus_login.php" class="btn btn-default btn-md pull-right">Login Here</a></span>-->
        </div>   
                    </form>						
								</div>
								<div class="clearfix"> </div>
				        </div>
						</div>
					</div>
				</div>
    			</div>