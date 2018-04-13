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
		
<!---//End-rate---->
    
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
</style>
    
    
    
    <script type="text/javascript">
    $(document).ready(function() {
        
        /*
         setInterval(function(){
                    $('#chattext').load("get_data.php");
                }, 100); */
        
                
    $(".cate").change(function(){
       $("#loding1").show();
        var id=$(this).val();
        var dataString = 'id='+ id;
        $(".subcate").find('option').remove();
    $.ajax({
        type: "POST",
        url: "get_sub.php",
        data: dataString,
        cache: false,
        success: function(html){
            $("#loading1").hide();
            $(".subcate").html(html);
        }
    });
});
	
              
        //var id=$(this).val();
        var varitm = $('#itm').val();
        $.ajax({
            method: "POST",
            url:    "get_data.php",
            data:  {itms: varitm}
           // success: function(){
               // $('#chattext').load(html);
           // }
        })
        
        .done(function(data){
             setInterval(function(){
                    $('#chattext').load("get_data.php");
                }, 100); 
        })
        
        $('#button2').click(function(){
                
                var varemail = $('#email').val();
                var varchat = $('#chat').val();
                var varitm = $('#itm').val();
             
                $.ajax({
                   method: "post",
                   url: "data.php",
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
               <br><br>
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
				<!--<div class="block block-w3">
					<div class="starbox small ghosting"> </div>
				</div>-->
				<p class="in-pa"> <?php echo $itm_des; ?> </p>
			   	
			
                    <?php $itm_id = $_GET['itm_id']; ?>
					<div class="add add-3">
				    <!--<a class="btn btn-danger my-cart-btn my-cart-b" href="chat.php">Start Chat Here!</a>-->
                        
                        <?php  
                        
                        if(isset($_SESSION['email'])){  ?>
                       
                         <a href="#" data-toggle="modal" data-target="#myModal3" class="btn btn-danger my-cart-btn my-cart-b">
										View Seller Contact
									</a>
                        <!--
                       <a class="btn btn-danger my-cart-btn my-cart-b" href="Chatzz/test.php?itm_id=<?php echo $itm_id; ?>">Start Chat Here!</a>-->
                        
    
                           <?php //echo "Looged INN";
                        }else{
                            ?>
                        <a href="#" data-toggle="modal" data-target="#myModal1" class="btn btn-danger my-cart-btn my-cart-b">
										Login To Chat Seller!
                        </a>
                        
                      <!--<div class="chat_box">
                        <div class="chat_head"> Chat Box</div>
                        <div class="chat_body"> 
                        <div class="user"> User Of the store</div>
                        </div>
                      </div>-->
                        
                        <?php
   // echo "Not Logged In";;
}
                        ?>
				    
                    </div>
			   
			<div class="clearfix"> </div>
			</div>
		 

	   </div>	
	
                
				
	</div>
</div>
		<!---->
<div class="content-top offer-w3agile">
	<div class="container ">
			<div class="spec ">
				<h3>Other Related Products</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
						<div class=" con-w3l wthree-of">
							
						<?php 
                    $itm_id = $_GET['itm_id'];
                    $get_itm = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
                    $rw = mysqli_fetch_assoc($get_itm);

                    $biz_id = $rw['biz_id'];
                    //$get_product = mysqli_query($conn, "SELECT * FROM items WHERE biz_id = '$biz_id' AND itm_id != '$itm_id'");
                    $get_product = mysqli_query($conn, "SELECT * FROM items WHERE itm_cate = '$itm_cate' AND itm_id != '$itm_id'");
                    while($row = mysqli_fetch_assoc($get_product)){
                    ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
										<img src="uploadz/<?php echo $row['itm_img']; ?>" class="img-responsive" alt="">
										<div class="offer"><p><span>Best Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="view_items.php?itm_id=<?php echo $row['itm_id'] ?>"><?php echo $row['itm_name'] ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><!--<label>$7.00</label>--><b>Price: </b><em class="item_price">&#8358; <?php echo number_format($row['itm_price']); ?></em></p>
											  <div class="block">
                                                  
												<div class="starbox small ghosting"> </div>
											</div><br>
                                            
                                            <p ><b>Address: </b><em class="item_price"><?php echo $row['biz_add']; ?>, <?php echo $row['biz_loc']; ?></em></p>
											  
											<div class="clearfix"></div>
										</div>
											<div class="add">
										    <a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>" class="btn btn-danger my-cart-btn my-cart-b">Chat Seller</a>
										</div>
									</div>
								</div>
							</div>
                            
                            <?php } ?>
                            
							<div class="clearfix"></div>
						 </div>
					</div>
	
    
    
<!--footer-->
<?php include 'footer.php';   ?>
<!-- //footer-->

<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</html>
    
    
       
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
    
    <?php    if(isset($_SESSION['email'])){ 
           $itm_id = $_GET['itm_id'];
               
    ?>
    
    <script type="text/javascript">
    $(document).ready(function(){
        
        var varitm_id = $('#itm_id').val();
        
        $.ajax({
            method: "GET",
            url: "get_cus.php",
            data: {itm_id: varitm_id},
            
            done:function(response){
                var res = JSON.parse(response);
                res.forEach(function(eachRow){
                    $('.msg_b').append('<li>'+eachRow.chatMessage+'</li>')
                })
            }
            //success: function(data)
            //{
              //   setInterval(function(){
                //    $('.msg_b').load("get_cus.php");
                //}, 1000); 
                
               
            }
        })
        
    });
    </script>
    
    <!-- Chat app area 
<div class="msg_box" style="right:2px">
    <div class="msg_head"><b>Chat <?php echo $biz_name; ?> Store</b> <br><i><?php echo $itm_name; ?> - &#8358;<?php echo number_format($itm_price); ?></i>
	<!--<div class="close">X</div>
	</div>
	<div class="msg_wrap">
		<div class="msg_body">
			<!--<div class="msg_a">This is from A	</div>
			<div class="msg_b">This is from B, and its amazingly kool nah... i know it even i liked it :)</div>
			<div class="msg_a">Wow, Thats great to hear from you man </div>	-->
            
            <!--<div class="msg_b"></div>
			<div class="msg_push"></div>
		</div>
        <input type="hidden" name="itm_id" id="itm_id" value="<?php echo $itm_id; ?>">
        <input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
        
	<div class="msg_footer"><textarea class="msg_input"  name="sender_msg" rows="3"></textarea></div>
</div>
    </div>
    -->
    <?php }else{  }?>
    
    
    