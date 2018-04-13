<?php 
include 'main_user.php';
?>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Item Info</h3>
		<h4><a href="user.php">Home</a><label>/</label>Item Info</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- typography -->
<div class="typrography">
	 <div class="container">
         
         
          <div class="single-top-main">
	   		<div class="col-md-5 single-top">
	   		<div class="single-w3agile">
                <?php 
                $itm_id = $_GET['itm_id'];
                $email = $_SESSION['email'];
                $selectt = mysqli_query($conn, "SELECT * FROM note WHERE itm_id = '$itm_id' AND biz_email = '$email'");
                $getch = mysqli_fetch_assoc($selectt);
                $cus_email = $getch['email'];
                //$hit = mysqli_query($conn, "UPDATE items SET itm_hit = itm_hit + 1 WHERE itm_id = '$itm_id'");
                $get_itm = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
                $rw = mysqli_fetch_assoc($get_itm);
                $biz_id = $rw['biz_id'];
                $itm_name = $rw['itm_name'];
                $itm_price = $rw['itm_price'];
                $itm_pic = $rw['itm_img'];
                $itm_des = $rw['itm_des'];
                $itm_cate = $rw['itm_cate'];
                //$biz_name = $rw['biz_name'];
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
				
				<p class="in-pa"> <?php echo $itm_des; ?> </p>
                    <?php $itm_id = $_GET['itm_id']; ?>
					<div class="add add-3">
				    <!--<a class="btn btn-danger my-cart-btn my-cart-b" href="chat.php">Start Chat Here!</a>-->
                    </div>
			   
			<div class="clearfix"> </div>
			</div>
	   </div>	
	</div>
	</div>
</div>
<!-- //typography -->
<!--footer-->
<?php include 'footer.php'; ?>
<!-- //footer-->
        
            <!-- Chat app area -->
<div class="msg_box" style="right:5px">
    <div class="msg_head"><b>Chat With <?php echo $biz_name; ?> Store</b> <br><i><?php echo $itm_name; ?> - &#8358;<?php echo number_format($itm_price); ?></i>
	<!--<div class="close">X</div>-->
	</div>
	<div class="msg_wrap">
		<div class="msg_body">
			<!--<div class="msg_a">This is from A	</div>
			<div class="msg_b">This is from B, and its amazingly kool nah... i know it even i liked it :)</div>
			<div class="msg_a">Wow, Thats great to hear from you man </div>	-->
            <?php 
            
            $get_chats = mysqli_query($conn, "SELECT * FROM chat");
            
            while($ro = mysqli_fetch_assoc($get_chats)){ ?>
             <div class="msg_a"><?php  echo $ro['sender_msg']; ?></div>   
        <?php    
            }
            ?>
			<div class="msg_push"></div>
		</div>
         <input type="hidden" name="itm_id" id="itm_id" value="<?php echo $itm_id; ?>">
         <input type="hidden" name="email" id="email" value="<?php echo $cus_email; ?>">
	<div class="msg_footer"><textarea class="msg_input" rows="3"></textarea>
        
</div>
</div>
</div>
            
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>
-