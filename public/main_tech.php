<?php  

include 'config.php';

    if(!isset($_SESSION['email'])){
        
        echo "<script> window.location = 'index.php'</script>";
    }
    

   $email = $_SESSION['email'];
    
    $giv = mysqli_query($conn, "SELECT * FROM technician WHERE email = '$email'");
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
<title>Lolius | Technician Dashboard</title>
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
<link href="user_chat.css" rel="stylesheet" type="text/css"/>
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="user_script.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<!--<link href="style.css" rel="stylesheet" type="text/css" media="screen">


<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
$('document').ready(function()
{ 
	
	
	$("#back").click(function(){
		window.location.href = "additem.php";
	});
});
</script>
    
    <script type="text/javascript">
        /*
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
			url: "get_states.php",
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
			url: "get_citys.php",
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
*/
    </script>
        
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
    

    
        <style type="text/css">
    #box{
        margin: 0 auto;
        max-width: 500px;
        padding: 19px 29px 29px;
        margin: 0 auto;
        margin-top:40px;
       #background-color: #fff;
        background-color: transparent;

       #border: 1px solid #e5e5e5;
        #-webkit-border-radius: 5px;
           #-moz-border-radius: 5px;
                #border-radius: 5px;
        #-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           #-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);

        font-family:Tahoma, Geneva, sans-serif;
        color:#990000;
        font-weight:lighter;
    }
        #chatbox{
        max-height: 250px;
        min-height: 250px;
        overflow: auto;
        margin: 5px;
        
        }
    #chattext{
        
    }
        
    
    #button1{
        padding: 10px;
        color: whitesmoke;
        background-color: gray; 
    }
    
    #button{
        padding: 2px;
        color: whitesmoke;
        background-color: gray;
        margin: 5px;  
    }
        
      
.navbar-brand{
	font-family:"Lucida Handwriting";
}
#btn-submit{
	height:45px;
}
            
            .file_drag_area{
                width: 600px;
                height: 400px;
                border: 2px dashed #ccc;
                text-align: center;
                font-size: 24px;
                color: #ccc;
                line-height: 400px;
            }
            
            .file_drag_over{
                color: #000;
                border-color: #000;
            }
            
            
</style>
    
    
    
    <script type="text/javascript">
    $(document).ready(function() {
        
        
        $('#button2').click(function(){
                
                var varemail = $('#email').val();
                var varchat = $('#chat').val();
                var varitm = $('#itm').val();
             
                $.ajax({
                   method: "post",
                   url: "datas.php",
                   data: {email: varemail, chat: varchat, itm: varitm},
                   success: function(){
                       $('#chat').val('');
                   }
                    
                })
            
                .done(function(data) {
                    $('#chattext').html(data);
                    
                });
                     
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
<div class="header">

		<div class="container">
			
			<div class="logo">
				<a href="tech.php"><img src="images/p.png"  alt=""><br><span>Home of best Prices</span></a>
		</div>
			<div class="head-t">
				<ul class="card">
					<!--<li><a href="about.html" ><i class="fa fa-heart" aria-hidden="true"></i>About Us</a></li>
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<!--<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.html" ><i class="fa fa-phone" aria-hidden="true"></i>Contact Us</a></li>
				</ul>	
			</div>-->
			
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
							<li class=" active"><a href="tech.php" class="hyper "><span>Home</span></a></li>	
							<li class=""><a href="tech_list.php" class="hyper "><span>List of Services</span></a></li>	
							
                            <li><a href="logout.php" class="hyper"><span>LogOut</span></a></li>
						
							
						</ul>
					</div>
					</nav>
					<!--<div class="cart" >
					
						<span class="fa fa-user "> <span><?php echo $name; ?></span>
					</div>-->
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
  <!---->