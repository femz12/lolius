<?php  
include 'config.php';
if(!isset($_SESSION['email'])){ 
        echo "<script> window.location = 'index.php'</script>";
    }
    
   $email = $_SESSION['email'];
    $giv = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    while($si = mysqli_fetch_assoc($giv)){
        $name = $si['name'];
        $email= $si['email'];
        $phone = $si['phone'];
    }
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css" href = "css/style.css"/>
		<meta charset = "UTF-8" name= "viewport" content = "width=device-width, initial-scale=1" />
        
        <title>Lolius | Enhancing Authentic Buying</title>
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
       /* $(document).ready(function(){
            
           $('#post').click(function(){
               var tcode = $('#tcode').val();
               var status = $('#status').val();
               $.ajax({
                   method: "POST",
                   url: "update.php",
                   data: {tcode: tcode, staus:status},
                   
                   success: function(){
                       alert('DONE!!!');
                   }
                   
               })
           }) ;
        });*/
        </script>
	</head>
<body>
	<?php include 'panel.php'; ?>
   <!--banner
<div class="banner-top">
	<div class="container">
		<h3 >Order Information</h3>
		<h4><a href="user.php">Home</a><label>/</label>Order Information</h4>
		<div class="clearfix"> </div>
	</div>
</div>
-->
	<!-- contact -->
		<div class="check-outa">	 
		<div class="container">	 
	 <div class="spec ">         
	   <div class="grid_3 grid_5 animated" >
			 <h3 class="bars">Order Information</h3>
				<div class="col-md-6">

					  <table class="table table-bordered">
						
						<tbody>
                            <?php 
                             $prd_id = $_GET['prd_id'];
                             $get_product = mysqli_query($conn, "SELECT * FROM tech_orders WHERE prd_id = '$prd_id' 
                             AND email = '$email'");
                            $roww = mysqli_fetch_assoc($get_product);
                             ?>
							<tr>
								<th>Product Name</th>
								<td><?php echo $roww['itm_name']; ?></td>
							</tr>
                            <tr>
								<th>Product Price</th>
								<td>&#8358; <?php echo $roww['price']; ?></td>
							</tr>
                            
                            <tr>
								<th>Product Fault</th>
								<td><?php echo $roww['fault']; ?></td>
							</tr>

							<tr>
								<th>Repair Duration</th>
								<td><?php echo $roww['duration']; ?></td>
							</tr>
                            
                            <tr>
                                <th><b>Total</b></th>
								<td><b>&#8358; <?php  
                                            echo number_format($price = $roww['price']);
                                    ?></b></td>
							</tr>
                            
							<?php $get_item = mysqli_query($conn, "SELECT * FROM tech_orders WHERE prd_id = '$prd_id'");
                        $ft = mysqli_fetch_assoc($get_item);
                        $order_Addr = $ft['address'];

                        if($order_Addr == ''){ ?>
                            <tr>
                            <th></th>
                            <td><a href="#" class="btn btn-success disabled">Check Out</a></td>
                            </tr>
                            

                            <?php }else{ ?>

                            <tr>
                            <th></th>
                            <td><a href="#" class="btn btn-success">Check Out</a></td>
                            </tr> 

                            	

                          <?php  } ?>
						</tbody>
					  </table>                    
				</div>
				<div class="col-md-6">
				  
					<div class="list-group list-group-alternate"> 
						<table class="table table-bordered">
						<tbody>
                            <tr>
								<th>Item Pick-Up Address</th>
								
							</tr>
                        </tbody>
                        </table>
                        <?php
                        $get_item = mysqli_query($conn, "SELECT * FROM tech_orders WHERE prd_id = '$prd_id'");
                        $ft = mysqli_fetch_assoc($get_item);
                        $order_Addr = $ft['address'];

                        if($order_Addr == ''){
                        	$email = $_SESSION['email'];
                        	$get_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
                        	$getch = mysqli_fetch_assoc($get_user);
                        	$user_add = $getch['biz_addr'];
                         ?>

                        	<form action="" method="POST">
                        <table class="table table-responsive table-bordered">
                        	
						<tbody>
                            <tr>
								<th>Address</th><td><input type="text" name="address" class="form-control" value="<?php echo $user_add; ?>"></td>
							</tr>

							<tr>
								<th>State</th><td><select class="form-control" name="state" required="">
									<option>Lagos</option>
								</select></td>
							</tr>

							<tr>
								<th>LGA</th><td><select class="form-control" name="lga" required="">
									<option>Ikeja</option>
								</select></td>
							</tr>

							<tr>
								<th></th><td><input type="submit" class="form-control btn btn-default" 
									name="up_add" value="Add Address"></td>
							</tr>
                        </tbody>
                        </table>
                    	</form>
                        <?php
                        	if(isset($_REQUEST['up_add'])){
                        		$address = $_POST['address'];
                        		$state = $_POST['state'];
                        		$lga = $_POST['lga'];
                        		$prd_id = $_GET['prd_id'];
                        		$email = $_SESSION['email'];
                        		echo "<script>alert('$email');</script>";
                        		
                        		$update = mysqli_query($conn, "UPDATE tech_orders SET address = '$address', state = '$state', lga = '$lga' WHERE prd_id = '$prd_id' AND email = '$email'") or die(mysqli_error());

                        			echo "<script>alert('Address Added Successfully');</script>";
                        		echo "<script>window.location = 'order_tech.php?prd_id=$prd_id';</script>";

                        	}

                        }else{ 
                         ?>

						<?php
                        }
                        ?>

                        

					</div>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
         
            </div>
		 </div>
		 </div>
		 				
	<!--quantity-->
			<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
			</script>
			<!--quantity-->
			

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

