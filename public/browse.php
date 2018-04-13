
<?php 
include 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>lolius | Sellers and Buyers Chatting Site</title>
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
    
    
    $(".cate").load(function(){
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
	
	
	/*$(".state").change(function()
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
	});*/
	
});
		</script>
<!---//End-rate---->

</head>
<body>
<!--<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>-->
<?php include 'panel.php';  ?>
 

   <div data-vide-bg="video/video">
    <div class="container">
		<div class="banner-info">
		<h3>Search Products on <?php echo $category = $_GET['category']; ?></h3>			
			<div class="search-form">
				<form action="result.php" method="post">
                    
                    <?php 
                    $get_cate = mysqli_query($conn, "SELECT * FROM cate WHERE category = '$category'");
                    $ft = mysqli_fetch_assoc($get_cate);
                    
                    $cate_id = $ft['id'];
                    ?>
                    
                   <!-- <select name="itm_cate" class="form-control select cate" required>
                    <option value="">Select Item Category</option>
                        <?php 
            $cates = mysqli_query($conn, "SELECT * FROM cate ORDER BY category ASC");
            while($ro = mysqli_fetch_assoc($cates)){
            ?>
            <option value="<?php echo $ro['id']; ?>" style="color:black"><?php echo $ro['category']; ?></option>
            <?php } ?>
                    </select>-->
                    
                    <select name="sub_cate" class="form-control select subcate" required>
                    <option value="">Select SubCategory</option>
                         <?php 
            $cates = mysqli_query($conn, "SELECT * FROM sub_cate WHERE cate_id = '$cate_id'");
            while($ro = mysqli_fetch_assoc($cates)){
            ?>
            <option value="<?php echo $ro['cate_name']; ?>" style="color:black"><?php echo $ro['cate_name']; ?></option>
            <?php } ?>
                    </select>
                    
                    <select name="biz_loc" class="form-control select country" required>
                        
                        <option style="color:black" value="">Select Your State</option>
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
                    <select name="biz_lga" class="form-control select state" required>
                    <option style="color:black" value="">Select Your LGA</option>
                    </select>
                    
                    
					<input type="text" placeholder="Street name" value="Street Name" name="biz_addr" class="form-control input" required>
					<input type="text" placeholder="Item Name" value="Item Name" name="itm_name" class="form-control input" required>
					<!--<input type="text" placeholder="Search..." name="itm_name" class="form-control input" required>-->
					<input type="submit" name="search" class="button" value="Search" >
                    
                   
				</form>
			</div>
			</div>		
		</div>	
    </div>
</div>    
   

<?php 

            if(isset($_REQUEST['search'])){
                
                $itm_name = $_POST['itm_name'];
                
                $search = mysqli_query($conn, "SELECT * FROM items WHERE itm_name LIKE '%$itm_name%'");
                 $search_count = mysqli_num_rows($search);
                
                
                
                
            }

        ?>
           

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

		
	</div>
	</div>
	</div>

<!--content-->
	<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Products on <?php echo $category = $_GET['category']; ?> Category</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" con-w3l">
                    <?php 
                    $category = $_GET['category'];
                    $category = mysqli_query($conn, "SELECT * FROM items WHERE itm_cate='$category' ORDER BY id ASC");
                            while($row = mysqli_fetch_assoc($category)){
                    ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img src="uploadz/<?php echo $row['itm_img']; ?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="#"><?php echo $row['itm_name']; ?></a></h6>							
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
										   <a href="view_items.php?itm_id=<?php echo $row['itm_id']; ?>" class="btn btn-danger my-cart-btn my-cart-b">View Item</a>
										
										</div>
									</div>
								</div>
                    </div>
                    <?php } ?>
							
							<div class="clearfix"></div>
						 </div>
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