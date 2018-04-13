 
<?php 
include 'config.php';

    if(!isset($_SESSION['email'])){
        
        echo "<script> window.location = 'index.php'</script>";
    }
    

   $email = $_SESSION['email'];
    
    $giv = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
    while($si = mysqli_fetch_assoc($giv)){
        $name = $si['name'];
        $email = $si['email'];
        $biz_cate = $si['biz_cate'];
        $biz_stage = $si['biz_stage'];
        $biz_loc = $si['biz_loc'];
        $date = $si['date'];
        $biz_det = $si['biz_det'];
        $web = $si['web'];
        $phone = $si['phone'];
    }
  $itm_id = $_GET['itm_id'];
?>

<!doctype html>
<html lang="en">

<head>
	<title>Dashboard</title>
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
		<!-- WRAPPER -->
<?php include 'side_bar.php'; ?>
			<!--<a class="footer" href="http://twitter.com/share?url=https://goo.gl/1dt1MR&amp;text=So cool! Free Bootstrap dashboard template by @thedevelovers. Download at&amp;hashtags=free,bootstrap,dashboard" title="Twitter share" target="_blank"><i class="fa fa-twitter"></i> <span>SHARE THIS FREEBIE</span></a>-->
		</div>
		<!-- END SIDEBAR -->
		<!-- MAIN -->
		<?php include 'head.php'; ?>
    
   <div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Product Overview</h3>
							<p class="panel-subtitle"></p>
						</div>
                        
                        <?php 
                        $get_prdt = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm_id'");
                        while($its = mysqli_fetch_assoc($get_prdt)){
                            $ptd_id = $its['itm_id'];
                            $ptd_name = $its['itm_name'];
                            $ptd_cate = $its['itm_cate'];
                            $ptd_qty = $its['itm_qty'];
                            $ptd_price = $its['itm_price'];
                            $ptd_size = $its['itm_size'];
                            $ptd_des = $its['itm_des'];
                            $ptd_sub = $its['itm_subcate'];
                            $ptd_stat = $its['status'];
                            $biz_id = $its['biz_id'];
                            $biz_sub = $its['biz_id'];
                            $biz_email = $its['biz_email'];
                        }
                        ?>
                        <div class="row">
						<div class="col-md-6">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-body">
									<table class="table table-hover">
										
										<tbody>
											<tr>
												<th>Product ID</th>
												<td><?php echo $ptd_id; ?></td>
											</tr>
											<tr>
												<th>Product Name</th>
                                                <td><?php echo $ptd_name; ?></td>
											</tr>
                                            <tr>
												<th>Product Category</th>
												<td><?php echo $ptd_cate; ?></td>
                                                
											</tr>
                                            
                                            <tr>
												<th>Product Sub-Category</th>
												<td><?php echo $ptd_sub; ?> </td>
                                                
											</tr>
                                            
                                            <tr>
												<th>Product Quantity</th>
												<td><?php echo $ptd_qty; ?></td>
                                                
											</tr>
                                            
                                             <tr>
												<th>Product Price</th>
												<td>&#8358; <?php echo $ptd_price; ?> per item</td>
                                                
											</tr>
                                            
                                             <tr>
												<th>Product size</th>
												<td><?php echo $ptd_size; ?></td>
                                                
											</tr>
                                            
                                             <tr>
												<th>Product Description</th>
												<td><?php echo $ptd_des; ?></td>
                                                
											</tr>
                                            
                                             <tr>
												<th>STATUS</th>
												<td><?php echo $ptd_stat; ?></td>
                                                
											</tr>
											
										</tbody>
									</table>
                                    <form action="" method="post">
                                    <a href="store_item.php?email=<?php echo $biz_email ?>" title="" class="btn btn-primary btn-md">Back to Item List</a> 
                                        <?php if($ptd_stat == 'LIVE'){ }else{ ?>
                            <input type="submit" name="pub" class="btn btn-default btn-md" value="Publish Product">
                                         <input type="submit" name="reject" class="btn btn-danger btn-md" value="Reject Product"> <?php } ?>
                                    </form>
                       
								</div>
                                
							</div>
                            
                            
							<!-- END BASIC TABLE -->
						</div>
                            
                           
                            
                        <?php  
                        $itm_id = $_GET['itm_id'];
                        $get_img = mysqli_query($conn, "SELECT * FROM itm_images WHERE itm_id = '$itm_id'");
                        $get_img_num = mysqli_num_rows($get_img);
                        ?>
                            <?php while($get = mysqli_fetch_assoc($get_img)){ ?>
                                <div class="col-md-3">
									<div class="metric">
										<img src="../uploadz/<?php echo $get['itm_image'] ?>" title="<?php echo $get['itm_image'] ?>" class="img-responsive">
									</div>
								</div>
                                <?php
                                    } ?>
                            
                            
                        
                        
                        
                    </div>
       </div>
    </div>
       
       <footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2018. Designed &amp; Crafted by <a href="https://themeineed.com">The Develovers</a></p>
				</div>
			</footer>
		</div>
            
            
            <script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="assets/js/plugins/chartist/chartist.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>
</body>

</html>

 <?php  
                            if(isset($_REQUEST['pub'])){
                               $itm_id = $_GET['itm_id'];
                                
                                $upd = mysqli_query($conn, "UPDATE items SET status = 'LIVE' WHERE itm_id = '$itm_id'") or die(mysqli_error());
                                echo "<script>alert('You have Succesfully Approved this Item, It Will Now Be Live On Our Platform');</script>";
                                echo "<script>window.location = 'item_details.php?itm_id=$itm_id';</script>";
                                
                                
                            }

if(isset($_REQUEST['reject'])){
                               $itm_id = $_GET['itm_id'];
                                
                                $upd = mysqli_query($conn, "UPDATE items SET status = 'REJECT' WHERE itm_id = '$itm_id'") or die(mysqli_error());
                                echo "<script>alert('You have Succesfully Rejected This Item, It Will Not Be Live On Our Platform');</script>";
                                echo "<script>window.location = 'item_details.php?itm_id=$itm_id';</script>";
                                
                            }
                            ?>
