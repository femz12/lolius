<?php 
include 'main_user.php';
?>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Notification</h3>
		<h4><a href="index.html">Home</a><label>/</label>Notification</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- typography -->
<div class="typrography">
	 <div class="container">	  
	   <div class="col-md-12" data-wow-delay=".5s">
           <h3 class="text-center">Chat Notifications</h3>
				
				<div class="col-md-6 col-md-offset-3">
				 <!-- <p>Easily highlight new or unread items with the <code>.badge</code> class</p>-->
					<div class="list-group list-group-alternate">
                        <?php 
                        //echo $email;
                        $get_note = mysqli_query($conn, "SELECT * FROM note WHERE biz_email = '$email'");
                        while($ro = mysqli_fetch_assoc($get_note)){
                        ?>
                        
                       
                        
                        <a href="chat.php?itm_id=<?php echo $ro['itm_id']; ?>" class="list-group-item"><span class="badge badge-primary">0</span> <i class="ti ti-eye"></i> <b><?php echo $ro['sender_name']; ?></b> requested to buy <bi><i><?php echo $ro['itm_name']; ?></i></bi> </a>
						
                        <?php } ?>
						<!--<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
						<a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
						<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
						<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
						<a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a>--> 
					</div>
			   </div>
           
           
			   <div class="clearfix"> </div>
			 </div>
         
	</div>
</div>
<!-- //typography -->
<!--footer-->
<?php include 'footer.php'; ?>
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

</body>
</html>

<div class="modal fade" id="myModal<?php echo $itm_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
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
												<img src="uploadz/upload/<?php echo $itm_pic; ?>" class="img-responsive" alt="">
											</div>
                                                
                                                <div class="price_single">
									  <span class="reducedfrom ">Price: <?php echo $itm_price; ?></span>
									
									 <div class="clearfix"></div>
									</div>
											</div>
								</div>
								<div class="col-md-7 span-1 ">
                                    
                                    <?php  
                                    $itm_id = $_GET['itm_id'];

$get_itm = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");

$rw = mysqli_fetch_assoc($get_itm);

$biz_email = $rw['biz_email'];

$get_itms = mysqli_query($conn, "SELECT * FROM business WHERE email = '$biz_email'");

$row = mysqli_fetch_assoc($get_itms);

$biz_name = $row['name'];
$biz_loc = $row['biz_loc'];
$biz_addr = $row['biz_addr'];
                                    
                                    ?>
									<h3>Chat <?php echo $biz_name; ?> store</h3>
									 <div class="col-md-12" id="box">
              
              
              <?php 
        $sender_msg=$_POST['sender_msg'];
		$sender=$_POST['sender'];
        
        $sender = 'You';
        $search = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
        $search_count = mysqli_num_rows($search);
        $rows = mysqli_fetch_assoc($search);
        $biz_email = $rows['biz_email'];
    
        $get_biz = mysqli_query($conn, "SELECT * FROM business WHERE email = '$biz_email'");
        $rw = mysqli_fetch_assoc($get_biz);

        $biz_name = $rw['name'];
        $biz_loc = $rw['biz_loc'];
        $biz_addr = $rw['biz_addr'];
        $biz_email = $rw['email'];
                                         
                                        
   $email = $_SESSION['email'];
    
    $giv = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    while($si = mysqli_fetch_assoc($giv)){
        $name = $si['name'];
        $email= $si['email'];
        
    }

              ?>
          <!---<h4 class="form-signin-heading">Chat with <?php echo $biz_name; ?> store</h4><hr/>-->
        
        <input type="" class="form-control" placeholder="Name" name="itm" id="itm" 
               value="<?php echo $itm_id; ?>" />
        <input type="hidden" class="form-control" placeholder="email" name="email" id="email" 
               value="<?php echo $email; ?>" />
              <div id="chatbox">
              <div id="chattext"></div>
              </div>
              
        <input type="text" class="form-control" placeholder="Message" name="chat" id="chat" />
        <span id="check-e"><button class="btn btn-danger" id= "button2">Send</buttonc></span>
       
          </div>
									
                                    
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>