 
<?php 
include 'config.php';

    if(!isset($_SESSION['email'])){
        
        echo "<script> window.location = '../index.php'</script>";
    }
    

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

<!doctype html>
<html lang="en">

<head>
	<title>Select Product Category</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="assets/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen">

    <script type="text/javascript" src="script.js"></script>

    <style type="text/css">

</style>
    
</head>

<body>
	<!-- WRAPPER -->
<?php include 'side_bar.php'; ?>
			<!--<a class="footer" href="http://twitter.com/share?url=https://goo.gl/1dt1MR&amp;text=So cool! Free Bootstrap dashboard template by @thedevelovers. Download at&amp;hashtags=free,bootstrap,dashboard" title="Twitter share" target="_blank"><i class="fa fa-twitter"></i> <span>SHARE THIS FREEBIE</span></a>-->
		</div>
		<!-- END SIDEBAR -->
		<!-- MAIN -->
		<?php include 'header.php'; ?>
    
            <div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Select Category For Your Product</h3>
							<p class="panel-subtitle">We want the best for you...</p>
						</div>
						<div class="panel-body">
                            <div class="row">
                                <?php 
                                $get_cate = mysqli_query($conn, "SELECT * FROM subcate");
                                while($gt = mysqli_fetch_assoc($get_cate)){
                                ?>
                                <a href="additem.php?id=<?php echo $gt['id']; ?>" title="">
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number"><?php echo $gt['name'] ?></span>
											<span class="title"></span>
										</p>
									</div>
								</div>
                                </a>
                                <?php } ?>
                               
                                
                               
                                </a>
                            </div>
                </div>
                             
							</div>
						
						</div>
					</div>
    <footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2016. Designed &amp; Crafted by <a href="https://themeineed.com">The Develovers</a></p>
				</div>
			</footer>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>
</body>

</html>
