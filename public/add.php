<?php 
include 'main_user.php';

include 'config.php';

   
?>


    <!-- Carousel
    ================================================== 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators 
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="care.html"><img class="first-slide" src="images/ba1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
          <a href="kitchen.html"><img class="second-slide " src="images/ba.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="hold.html"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->
<div class="banner-top">
	<div class="container">
		<h3 >Welcome <?php  echo $name; ?></h3>
		<h4><a href="user.php">Home</a><label>/</label>Dashboard</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--content-->
<div class="kic-tops"><br>
	<div class="container ">
	<div class="kic ">
			<h3>Select A Category</h3>
			
		</div>
        <?php 
        $get_cate = mysqli_query($conn, "SELECT * FROM subcate WHERE user = '$email'");
        while($row = mysqli_fetch_assoc($get_cate)){
        ?>
		<div class="col-md-3 kic-top1">
			<a href="additem.php?cate_name=<?php echo $row['cate_name']; ?>">
				<img src="admin/<?php echo $row['cate_img'];  ?>" class="img-responsive" alt="">
			</a>
			<h6><a href="additem.php?cate_name=<?php echo $row['cate_name']; ?>"><?php echo $row['cate_name'];  ?></a></h6>
			<p></p>
		</div>
		
        <?php  } ?>
        <div class="col-md-3 kic-top1">
			<a href="addcate.php">
				<img src="images/ki5.jpg" class="img-responsive" alt="">
			</a>
			<h6><a href="addcate.php">Add More Categories</a></h6>
			<!--<p>Nam libero tempore</p>-->
		</div>
    </div>
</div>


					 </div>-->
		</div>
	</div>
<!--footer-->
<?php include 'footer_user.php';  ?>
<!-- //footer-->
<script type="text/javascript" src="script.js"></script>
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
  <script type="text/javascript">
  
  </script>

</body>
</html>