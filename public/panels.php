
<nav class="navbar navbar-default navbar-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <center>
           <div class="logo">
				<h1><a href="index.php"><img src="images/p.png"   alt=""><br><span>Connecting buyers to close stores</span></a></h1>
            </div>
                </center>
			<div class="head-t">
				<ul class="card">
                </ul>
            </div>
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b></b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><li fa fa-home>Home</li></a>
                    </li>
                    <!--<li>
                        <a href="#">Manage Order</a>
                    </li>
                    <li>
                        <a href="#">Account Settings</a>
                    </li>-->
                    
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Manage Product<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="cate.php">Add Product</a></li>
                        <li><a href="view_product.php">View Products</a></li>
                        <li class="divider"></li>
                        <li><a href="">View Live Products</a></li>
                        </ul>
                        
                    </li>
                    
                     <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Manage Order<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="">View Orders</a></li>
                        <li><a href="">View Sales</a></li>
                        <!--<li class="divider"></li>
                        <li><a href="">vool</a></li>-->
                        </ul>
                        
                    </li>
                    
                     <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Account Settings<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="setup_shop.php">Setup Shop</a></li>
                        <li><a href="">SetUp Shipment Chanel</a></li>
                        <li><a href="">Change Shipment Chanel</a></li>
                        <li class="divider"></li>
                        <li><a href="">View Account Detail</a></li>
                        </ul>
                        
                    </li>
                </ul>
                
                <ul class = "nav navbar-nav navbar-right">
                     <li class="dropdown">
                         <a href="#" data-toggle="dropdown" class="dropdown-toggle">Welcome <b><?php echo $seller_fname ?> <?php echo $seller_lname ?></b> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Edit Personal Information</a></li>
                        <li><a href="#">View Personal Information</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php">LogOut From Account</a></li>
                        </ul>
                        
                    </li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>