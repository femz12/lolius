<?php 
include 'main_user.php';

include 'config.php';   
?>

<div class="banner-top">
	<div class="container">
		<h3 >Welcome <?php  echo $name; ?></h3>
		<h4><a href="user.php">Home</a><label>/</label>Dashboard</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--content-->
<!--<div class="kic-tops"><br>
	<div class="container ">
	<div class="kic ">
			<h3>Categories Subscribed</h3>
			
		</div>
        <?php 
        $get_cate = mysqli_query($conn, "SELECT * FROM subcate WHERE user = '$email'");
        while($row = mysqli_fetch_assoc($get_cate)){
        ?>
		<div class="col-md-3 kic-top1">
			<a href="additem.php?cate_name=<?php echo $row['cate_name']; ?>">
				<img src="biz/admin/<?php echo $row['cate_img'];  ?>" class="img-responsive" alt="">
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
			<!--<p>Nam libero tempore</p>
		</div>
    </div>
</div>-->

<!--content-->
		<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Your Products</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
            
            <div class=" con-w3l agileinf">
                <?php  
                $get_itm = mysqli_query($conn, "SELECT * FROM items WHERE biz_email = '$email'");
                $product_count = mysqli_num_rows($get_itm);
                if($product_count == 0){ ?>
                    <div class="container">
    <div class='alert alert-danger'>
		
			<strong>Opps!</strong> You do not have any Product to display yet, click the button below to add a Product
    </div>
    
    <button class="btn btn-primary" id="back">
      <span class="glyphicon glyphicon-backward"></span> &nbsp; Click Here to Add Product
    </button>
    
                </div>
                <?php
                }else{
            while($rw = mysqli_fetch_assoc($get_itm)){
                $biz_id = $rw['biz_id'];
                $biz_add = $rw['biz_add'];
                $itm_name = $rw['itm_name'];
                $itm_price = $rw['itm_price'];
                $itm_pic = $rw['itm_img'];
                $itm_des = $rw['itm_des'];
                $itm_cate = $rw['itm_cate'];
            ?>
                <div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img src="uploadz/<?php echo $rw['itm_img']; ?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="#"><?php echo $rw['itm_name']; ?></h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price">Price: &#8358; <?php echo $rw['itm_price']; ?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div><br>
                                            <p ><em class="item_price">Address: <?php echo $rw['biz_add']; ?></em></p>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" >View Details</button>
										</div>
									</div>
								</div>
                    </div>
                    
                    <?php } } ?>
            </div>
				
		</div>
	</div>
<!--footer-->
<?php include 'footer_user.php';  ?>
            
  <!--  <div class="chat_box">
	<div class="chat_head"> Chat Box</div>
	<div class="chat_body"> 
	<div class="user"> Krishna Teja</div>
	</div>
  </div>-->
  
    
            
<!-- //footer-->
<script type="text/javascript" src="script.js"></script>

		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  
  </script>

  
  
  				
</body>
</html>