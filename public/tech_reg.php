<?php 
include 'config.php';

if(isset($_SESSION['email'])){    
   // echo "Looged INN";
}else{
    //echo "Not Logged In";;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Lolius | Technician Registration</title>
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
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>

    <script type="text/javascript" src="tech_script.js"></script>

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
	
	$(".state").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var dataString = 'id='+ id;
		$.ajax
		({
			type: "POST",
			url: "get_city.php",
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
<!---//End-rate---->
</head>
<body>

<?php include 'panel.php';  ?>
     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Become A Technician</h3>
		<h4><a href="index.php">Home</a><label>/</label>Technician Registeration</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Technician Registeration</h3>
					<form action="" method="post" id="register-form">
                        
                        <div id="error">
        <!-- error will be showen here ! -->
                        </div>
           
        <div class="form-group">  
        <input type="text" class="form-control" placeholder="Your Shop Name" name="name" id="name" />
           </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" id="email" />
        <span id="check-e"></span>
        </div>
       
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
        </div>
           
          <!-- <div class="form-group">  
        <select name="biz_offer" class="form-control" id="biz_offer">
        <option value="">Business Offer</option>
        <option value="service" >Servicing Company</option>
        <option value="product">Production/Manufacturing Company</option>
        </select>
        </div>-->
  
       <!-- <div class="form-group">  
        <select name="biz_cate" class="form-control" id="biz_cate">
        <option value="">Business/Store Category</option>
        <?php 
            $cates = mysqli_query($conn, "SELECT * FROM cate ORDER BY category ASC");
            while($ro = mysqli_fetch_assoc($cates)){
            ?>
            <option value="<?php echo $ro['category']; ?>"><?php echo $ro['category']; ?></option>
            <?php } ?>
        </select>
        </div>-->
           
           <!--<div class="form-group">  
        <select name="biz_stage" class="form-control" id="biz_stage">
        <option value="">Select Business Stage</option>
        <option value="Startup">Start-Up Business</option>
        <option value="Estabished">Established Business</option>
        </select>
        </div>-->
           
        <div class="form-group">  
        <select name="biz_loc" class="form-control country" id="biz_loc">
        <option value="">Select Your Location</option>
        <?php
                        $stmt = mysqli_query( $conn, "SELECT * FROM states");
                        //$stmt->execute();
                        while($row=mysqli_fetch_assoc($stmt))
                        {
                            ?>
                            <option value="<?php echo $row['state_id']; ?>" style="color:black"><?php echo $row['name']; ?></option>
                            <?php
                        } 
                    ?>
        </select>
        </div>
                        
        <div class="form-group">  
        <select name="biz_lga" class="form-control state" id="biz_lga">
        <option value="">Select Your Business LGA</option>
        
        </select>
        </div>
                 <div class="form-group">  
        <input type="text" class="form-control" placeholder="Business Street Name e.g No 34, Balogun" name="biz_addr" id="biz_addr" />
        </div>
                        
        
   
           <div class="form-group">  
           <input type="text" class="form-control" placeholder="Business Phone Number" name="phone" id="phone" />
        </div>
           
           
      <!--  <div class="form-group">  
            <textarea name="biz_det" class="form-control" id="biz_det" cols="5" placeholder = "Brief details of your business"></textarea>
       <!-- <input type="text" class="form-control" placeholder="Business Address" name="biz_addr" id="phone" />
        </div>  -->
     	<hr />
        
        <div class="form-group">
            
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> <span><a href="tech_login.php" class="btn btn-default btn-md pull-right">Login Here</a></span>
            
        </div> 
                        
					</form>
				</div>
				
			</div>
		</div>
<!--footer-->
<?php include 'footer.php';  ?>
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
  
</body>
</html>