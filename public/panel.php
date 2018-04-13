
<?php  include 'config.php'; ?>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1><a href="index.php"><img src="images/p.png"   alt=""><br><span>Enhancing Authentic Buying</span></a></h1>
            </div>
			<div class="head-t">
				<ul class="card">
					
		

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
							<li><a href="index.php" class="hyper"><span>Home</span></a></li>	
							
							<!--<li><a href="other.php" class="hyper"><span>Trade Assurance</span></a></li>
                            <li><a href="#" class="hyper"><span>How To Buy</span></a></li>
                            <li><a href="#" class="hyper"><span>How To Sell</span></a></li>-->
                           <!-- <li><a href="other.php" class="hyper"><span>Biz Images</span></a></li>-->
							<?php  
                            $email = $_SESSION['email'];
    
                            $giv = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
                            while($si = mysqli_fetch_assoc($giv)){
                                $name = $si['name'];
                                $biz_email= $si['email'];
                                $biz_cate = $si['biz_cate'];
                                $biz_stage = $si['biz_stage'];
                                $biz_loc = $si['biz_loc'];
                                $date = $si['date'];
                                $biz_det = $si['biz_det'];
                                $web = $si['web'];
                                $phone = $si['phone'];
                            }
                            if($_SESSION['email']){ ?>
                                <li><a href="about.php" class="hyper"><span>About Us</span></a></li>
                            
                            <li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li 
                             <?php  }else{ ?>
                           <!-- <li><a href="sup_reg.php" class="hyper"><span>Start Selling</span></a></li>	          
                            <li><a href="sup_login.php" class="hyper"><span>Seller Login</span></a></li>-->
                            
                            <li><a href="logins.php" class="hyper"><span>Login</span></a></li>	          
                            <li><a href="register.php" class="hyper"><span>Register</span></a></li>
                            <li><a href="sup_login.php" class="hyper"><span>Become a Seller</span></a></li>
                            <li><a href="tech_login.php" class="hyper"><span>Become a Technician</span></a></li>
                                          
                                
                                <?php
   /// echo "Not Logged In";
}
                            ?>
                            >
						</ul>
					</div>
                        
                        
                    </nav>
                    
                     <?php if($_SESSION['email']){ ?>
                    <ul class = "nav navbar-nav navbar-right">
                     <li class="dropdown">
                         <a href="#" data-toggle="dropdown" class="dropdown-toggle"><b><?php echo $name ?></b> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">View Products</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php">LogOut</a></li>
                        </ul>
                        
                    </li>
                
                </ul>
                    
                    <?php }else{ ?>
                    
                    <?php } ?>
                        
                   
					<!-- <div class="cart" >
					
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>-->
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>