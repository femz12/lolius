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

$cate_name = $_GET['cate_name'];

?>
<!DOCTYPE html>
<html>
<head>
<title>Lolius | Add Product</title>
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
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>


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
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
<div class="header">

		<div class="container">
			
			<div class="logo">
                <h1><a href="index.php"><img src="images/p.png"   alt=""><br><span>Enhancing Authentic Buying</span></a>
		</div>
			<div class="head-t">
				<ul class="card">
									</ul>	
			</div>	

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
							<li class=""><a href="additem.php" class="hyper "><span>Add Service</span></a></li>	
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
     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Add Service</h3>
		<h4><a href="user.php">Home</a><label>/</label>Add Service<label></label><?php echo $cate_name; ?></h4>
		<div class="clearfix"> </div>
	</div>
</div>



	<div class="logine">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Add Item</h3>
					<form action="" method="post" id="register-form" class="signin-form" enctype="multipart/form-data">                        
                        <?php 
                         $email = $_SESSION['email'];
    
                        $giv = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
                        while($si = mysqli_fetch_assoc($giv)){
                            $name = $si['name'];
                            $email= $si['email'];
                            $biz_cate = $si['biz_cate'];
                            $biz_stage = $si['biz_stage'];
                            $biz_loc = $si['biz_loc'];
                            $biz_lga = $si['biz_lga'];
                            $date = $si['date'];
                            $biz_det = $si['biz_det'];
                            $web = $si['web'];
                            $biz_add = $si['biz_addr'];
                        }

                        $sub_cate = mysqli_query($conn, "SELECT * FROM cate WHERE category = '$cate_name'");
                        $ft = mysqli_fetch_assoc($sub_cate);
                        
                        $cate_id = $ft['id'];
                        ?>
           
        <div class="form-group"><label>Item Category</label>  
        <!--<input type="text" class="form-control" value="<?php echo $cate_name; ?>" name="itm_cate" id="itm_cate" disabled />-->
            
                           
        <div class="form-group">  
        <select name="device_type" class="form-control">
        <option value="">Select Device</option>
        <option value="laptop">Laptop</option>
        <option value="phone">Phone</option>
        <option value="tab">Tabs</option>
        </select>
        </div>
       
        <input type="hidden" class="form-control" value="<?php echo $name; ?>" name="biz_name" id="biz_name" disabled />
        <input type="hidden" class="form-control" value="<?php echo $biz_loc; ?>" name="biz_loc"  id="biz_loc"disabled />
            
        <input type="hidden" class="form-control" value="<?php echo $biz_lga; ?>" name="biz_lga"  id="biz_lga"disabled />
        <input type="hidden" class="form-control" value="<?php echo $email; ?>" name="biz_email" id="biz_email"  disabled />
        <input type="hidden" class="form-control" value="<?php echo $biz_add; ?>" name="biz_add" id="biz_add" disabled />
        <input type="hidden" class="form-control" value="<?php echo $web; ?>" name="web" id="web" disabled />
           </div>
        <!--                
        <div class="form-group">  
        <select name="sub_cate" class="form-control">
        <option value="">Select Sub-Category</option>
        <?php 
            $get_subcate = mysqli_query($conn, "SELECT * FROM sub_cate WHERE cate_id = '$cate_id'");
            while($rp = mysqli_fetch_assoc($get_subcate)){ ?>
            <option value="<?php echo $rp['cate_name']; ?>"><?php echo $rp['cate_name']; ?></option>
                <?php
              //$ip = $rp['cate_name'];                                            
            }
            ?>
        </select>
        </div>-->
        <div class="form-group">
        <select name="sub_cate" class="form-control" id="sub_cate">
        <option value="">Select One</option>
         <?php 
            $get_subcate = mysqli_query($conn, "SELECT * FROM sub_cate WHERE cate_id = '$cate_id'");
            while($rp = mysqli_fetch_assoc($get_subcate)){ ?>
            <option value="<?php echo $rp['cate_name']; ?>"><?php echo $rp['cate_name']; ?></option>
                <?php
              //$ip = $rp['cate_name'];                                            
            }
            ?>
            <option value="other" >Other</option>
        </select>                
        </div>      
           
         
                        
        <div class="form-group">  
        <input type="text" class="form-control" placeholder="Item Name" name="itm_name" id="itm_name" />
        </div>
                        
        <div class="form-group">  
        <input type="text" class="form-control" placeholder="Item Price" name="itm_price" id="itm_price" />
        </div>
        
                        
        <div class="form-group">  
        <input type="text" class="form-control" placeholder="Quantity of Item" name="itm_qty" id="itm_qty" />
        </div>
                        
         <div class="form-group">  
        <select name="city" class="form-control" id="city">
        <option value="">Your Location</option>
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
                        
         <div class="form-group">  
        <select name="itm_type" class="form-control" id="itm_type">
        <option value="">Item Type</option>
        <option>New</option>
        <option>Used</option>
        <option>Refurbished</option>
       
        </select>
        </div>

        <?php if($cate_name == 'Fashion'){ ?>
           
        <div class="form-group">  
        <select name="itm_size" class="form-control" id="itm_size">
        <option value="">Item Size</option>
        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>
        <option>XXL</option>
        </select>
        </div>
        <?php }elseif($cate_name == 'Electronics/Appliances' || $cate_name == 'Computer/Accessories' || $cate_name == 'Mobiles' ){ ?>
             <div class="form-group">  
            <textarea name="itm_spec" class="form-control" id="itm_spec" cols="5" placeholder = "Item Specification"></textarea>
       <!-- <input type="text" class="form-control" placeholder="Business Address" name="biz_addr" id="phone" />-->
        </div>           
        <?php
        } 
        ?>
          
        <div class="form-group">  
            <textarea name="itm_des" class="form-control" id="itm_des" cols="5" placeholder = "Brief Description of the item"></textarea>
       <!-- <input type="text" class="form-control" placeholder="Business Address" name="biz_addr" id="phone" />-->
        </div>  
        <hr />
        
        <div class="form-group">
            
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Continue
			</button> <!--<span><a href="sup_login.php" class="btn btn-default btn-md pull-right">Login Here</a></span>-->
            
        </div>        
</form>
            </div>				
    </div>
</div>
<!--footer-->
<?php include 'footer.php';  ?>

	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		<script src="js/bootstrap.js"></script>
</body>
</html>