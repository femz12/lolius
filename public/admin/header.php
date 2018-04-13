<?php 

include 'config.php';


   $email = $_SESSION['email'];
    
    $giv = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
    while($si = mysqli_fetch_assoc($giv)){
        $name = $si['name'];
        $email= $si['email'];
        $biz_cate = $si['biz_cate'];
        $biz_stage = $si['biz_stage'];
        $biz_loc = $si['biz_loc'];
        $date = $si['date'];
        $biz_det = $si['biz_det'];
        $web = $si['web'];
        $phone = $si['phone'];
        $id = $si['id'];
    }


?>
<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
						<form class="navbar-form navbar-left hidden-xs">
							<div class="input-group">
								<input type="text" value="" class="form-control" placeholder="Search dashboard...">
								<span class="input-group-btn"><button type="button" class="btn btn-danger">Go</button></span>
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right">
                            <?php 
                            
                            $get_nots = mysqli_query($conn, "SELECT * FROM request WHERE biz_det = '$email' AND status = 'NEW' ORDER BY id ASC");
                            
                            $get_note_num = mysqli_num_rows($get_nots);
                            ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-alarm"></i>
									<span class="badge bg-danger"><?php echo $get_note_num; ?></span>
								</a>
								<ul class="dropdown-menu notifications">
                                    <?php while($ip = mysqli_fetch_assoc($get_nots)){ ?>
    
                                    <li><a href="reqest.php?id=<?php echo $ip['id']; ?>" class="notification-item"><span class="dot bg-warning"></span><b><?php echo $ip['ret_name']; ?></b> requset for <b><?php echo $ip['qtys']; ?></b> qty of <b><?php echo $ip['itm_name']; ?></b></a></li>
    
    <?php 
} ?>
									
									<!--<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
									<li><a href="#" class="more">See all notifications</a></li>-->
								</ul>
							</li>
							<!--<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Basic Use</a></li>
									<li><a href="#">Working With Data</a></li>
									<li><a href="#">Security</a></li>
									<li><a href="#">Troubleshooting</a></li>
								</ul>
							</li>-->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $name; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
									<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>