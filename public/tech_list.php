<?php 

include 'config.php'; 

include 'main_tech.php';
  
?>
<div class="banner-top">
	<div class="container">
		<h3 >List of Services</h3>
		<h4><a href="tech.php">Home</a><label>/</label>Services</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>List of Services</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cross').fadeOut('slow', function(c){
							$('.cross').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cross1').fadeOut('slow', function(c){
							$('.cross1').remove();
						});
						});	  
					});
			   </script>	
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cross2').fadeOut('slow', function(c){
							$('.cross2').remove();
						});
						});	  
					});
			   </script>	
 <table class="table ">
		  <tr>
			<th class="t-head">Image</th>
			<th class="t-head">Device</th>
             
			<th class="t-head">Brand</th>
		  <th class="t-head">Model</th>

			<th class="t-head">Price</th>
			<th class="t-head">Fault</th>
			<th class="t-head">Duration</th>
		  </tr>
     <?php 
     $email  = $_SESSION['email'];
     $get_product = mysqli_query($conn, "SELECT * FROM tech_items WHERE email = '$email'");
     while($roww = mysqli_fetch_assoc($get_product)){
     ?>
		  <tr class="cross">
			<td class="t-data">
				<a href="" class="at-in">
					<img src="<?php echo $roww['pic']; ?>" class="img-responsive" height="50" width="50" alt="">
				</a>
			
				
			 </td>
            
            <td class="t-data">
            <h5><?php echo $roww['device']; ?></php></h5>
            </td>
			
            <td class="t-data"> <?php echo ($roww['brand']); ?></td>
            <td class="t-data"> <?php echo ($roww['model']); ?></td>
            <td class="t-data"> &#8358; <?php echo number_format($roww['price']); ?></td>
			<td class="t-data"> <?php echo ($roww['fault']); ?></td>
			<td class="t-data"> <?php echo ($roww['duration']); ?></td>
           <!-- <td class="t-data"><a href="product.php?itm_id=<?php echo $roww['itm_id']; ?>" class="btn btn-primary btn-sm" >view Item</a></td>
			<td class="t-data t-w3l"><a class="add-1" href="#">Add To Cart</a></td>-->
			
		  </tr>
     
     <?php } ?>
     
	</table>
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


?>