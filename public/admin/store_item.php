 
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
    }
?>

<!doctype html>
<html lang="en">

<head>
	<title>View Category</title>
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
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
                                    
                                    <?php 
                                   $email = $_GET['email']; 
                                    
                                    $get_store = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
                                    $find = mysqli_fetch_assoc($get_store);
                                    $store_name = $find['name'];
                                    ?>
                                    <h3 class="panel-title"> Items in  <?php echo $store_name; ?>'s Store</b></h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Store</th>
												<th>Name</th>
												<th>Cate</th>
												<th>Price</th>
												<th>Quantity</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
                                            <?php 
                                            //$ad_email = $det['email'];
                                            $email = $_GET['email']; 
                                            $get_ref_dir = mysqli_query($conn, "SELECT * FROM items WHERE biz_email = '$email' ORDER BY id DESC");
                                            while($rw = mysqli_fetch_assoc($get_ref_dir)){
                                            ?>
											<tr>
												
												<td><?php echo $rw['biz_name']; ?></td>
												<td><?php echo $rw['itm_name']; ?></td>
												<td><?php echo $rw['itm_cate']; ?></td>
												<td><?php echo $rw['itm_price']; ?></td>
												<td><?php echo $rw['itm_qty']; ?></td>
												<?php 
                                                if($rw['status'] == 'ON'){ ?>
                                                <td class="t-data t-w3l"><a class="btn btn-warning btn-sm" href="#">ON HOLD</a></td>
                                                <?php

                                                }else if($rw['status'] == 'OFF'){ ?>
                                                <td class="t-data t-w3l"><a class="btn btn-danger btn-sm" href="#">REJECTED</a></td>
                                                <?php

                                                }else if($rw['status'] == 'LIVE'){ ?>
                                                    <td class="t-data t-w3l"><a class="btn btn-success btn-sm" href="#">ACCEPTED</a></td>
                                                <?php
                                                }

                                                ?>
                                                <td>
                                                <a href="item_details.php?itm_id=<?php echo $rw['itm_id'] ?>" class = "btn btn-info btn-md">View Detail</a>
                                                </td>
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
					<p class="copyright">&copy; 2018. Designed &amp; Crafted by <a href="https://themeineed.com">The Develovers</a></p>
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