 
<?php 
include 'config.php';

    if(!isset($_SESSION['email'])){
        
        echo "<script> window.location = '../index.php'</script>";
    }
    

   $email = $_SESSION['email'];
    
    $id = $_GET['id'];
    $get_subcate = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$id'");
    $fet = mysqli_fetch_assoc($get_subcate);
    $cate_name = $fet['category'];

?>

<!doctype html>
<html lang="en">

<head>
	<title>View SubCategory For <?php echo $cate_name; ?> </title>
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
</head>

<body>
	<!-- WRAPPER -->
	<?php include 'side_bar.php';  ?>
			
		</div>
		<!-- END SIDEBAR -->
		<!-- MAIN -->
		<?php include 'head.php'; ?>
<div class="main-content">
				<div class="container-fluid">
                    
					
                    <div class="row">
						<div class="col-md-5">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
                                    
                                    <?php 
                                   // $id = $_GET['id']; 
                                    
                                    ?>
                                    <h3 class="panel-title">SubCategory for <?php echo $cate_name; ?> </b></h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Id</th>
												<th>Name</th>
											</tr>
										</thead>
										<tbody>
                                            <?php 
                                             $id = $_GET['id']; 
                                            
                                            $get_ref_dir = mysqli_query($conn, "SELECT * FROM sub_cate WHERE cate_id = '$id'");
                                            while($rw = mysqli_fetch_assoc($get_ref_dir)){
                                            ?>
											<tr>
												<td><?php echo $rw['id']; ?></td>
												<td><?php echo $rw['cate_name']; ?></td>
											</tr>
                                            <?php } ?>
								        </tbody>
									</table>
								</div>
							</div>
                            </row>
                            
                            </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2016. Designed &amp; Crafted by <a href="https://themeineed.com">The Develovers</a></p>
				</div>
			</footer>
		</div>
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