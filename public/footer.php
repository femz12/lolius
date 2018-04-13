<?php include 'config.php'; ?>
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>Lolius.com is a multinational online retail company which started in the city of Lagos, Nigeria's comercial hub. The company specialises in bringing retailers close to their end users for swift business transactions through its website and mobile application.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Popular Categories</h3>
			<ul>
                <?php $cat = mysqli_query($conn, "SELECT * FROM cate ORDER BY category ASC LIMIT 5");
                     while($ro = mysqli_fetch_assoc($cat)){
                     ?></php>
				<li><a href="browse.php?category=<?php echo $ro['category']; ?>"><?php echo $ro['category']; ?> </a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
                
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">Faqs</a></li>
				<li><a href="'#'">How to Sell</a></li>
				<li><a href="#">How to Buy</a></li>						 						 
				<li><a href="#">Contact Us</a></li>						  
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
            <?php  
            
            ?>
			<ul>
				<li><a href="logins.php">Buyer Login</a></li>
				<li><a href="register.php">Buyer Registeration</a></li>
				<li><a href="sup_login.php">Seller Login</a></li>
				<li><a href="sup_reg.php">Seller Registeration</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
                <h2 ><a href="index.php">Lolius.com<span> Enhancing authentic buying</span></a></h2>
				<p class="fo-para"></p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>9, Balogun Street, Off Obafemi Awolowo Way, Balogun Bus Stop, Ikeja, Lagos, Nigeria.</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+23490 9163 4130 , +2348137331282</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@bizallianz.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@lolius.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 
                <?php $Today = date('y:m:d',time());
        $new = date('Y', strtotime($Today)); echo $new; ?> 
                Lolius.com All Rights Reserved |   <a href="#"> Terms & Condition</a></p>
		</div>
	</div>
</div>