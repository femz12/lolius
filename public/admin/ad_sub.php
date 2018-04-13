 
<?php 
include 'config.php';

    if(!isset($_SESSION['email'])){
        
        echo "<script> window.location = 'index.php'</script>";
    }

   $email = $_SESSION['email'];
  

$id = $_GET['id'];

$check_cate = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$id'");
while($rp = mysqli_fetch_assoc($check_cate)){
    $cate_name = $rp['category'];
}
?>

<!doctype html>
<html lang="en">

<head>
	<title>Add SubCategory for - <?php echo $cate_name;  ?></title>
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
<?php
if(isset($error))
{
	?>
	input:focus
	{
		border:solid red 1px;
	}
	<?php
}
?>
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
    
    
			<!-- END NAVBAR -->
            <div class="profile-detail">
           <div class="profile-info">
	        <div class="panel">
			<div class="panel-heading">
			<h3 class="panel-title">Add SubCategories for <?php echo $cate_name; ?></h3>
            </div>
            <div class="panel-body">
               
            <form action="" method="post" enctype="multipart/form-data">
           <!-- <div class="form-group"> 
            Product Name
            <input type="text" name="category" class="form-control" value="<?php echo $cate; ?>"  disabled/>
            </div>
                
            <div class="form-group"> 
            Product Category
            <select class="form-control" name="sub_category" required>
                <?php if($cate == 'Fashion'){ ?>
            <option value="">Select Category</option> 
            <option>Male</option> 
            <option>Female</option> 
            <option>Kids</option> 
                <?php }elseif($cate == 'Computer/Mobile'){ ?>
            <option value="">Select Category</option>
            <option>Laptop</option> 
            <option>Desktop</option> 
                <option>Mobiles</option>
                <option>Accessories</option>
                <?php } ?>
            </select>
            </div>-->
                <?php 
                $id = $_GET['id'];

$check_cate = mysqli_query($conn, "SELECT * FROM cate WHERE id = '$id'");
while($rp = mysqli_fetch_assoc($check_cate)){
    $cate_name = $rp['category'];
}  ?>
            <div class="form-group"> 
            SubCategory Name
            <input type="text" name="cate_name" class="form-control" placeholder="Name" value=""  required/>
            </div>
          <input type="hidden" name="cate_id" value="<?php echo $id; ?>">
             
            <input type="submit" name="btn-signup" class="btn btn-default btn-md" value="Continue">			
            </form>
			</div>
</div>
            </div>
            </div>
        
        <footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2017. Designed &amp; Crafted by <a href="https://themeineed.com">The Develovers</a></p>
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

 <?php  
                if(isset($_REQUEST['btn-signup'])){
                    $cate_name = $_POST['cate_name'];
                    $cate_id = $_POST['cate_id'];
                   
        
                    $insert = mysqli_query($conn, "INSERT INTO sub_cate (cate_name, cate_id) VALUES('$cate_name', '$cate_id')");
                    
                    $id = $_GET['id'];
                   echo "<script>window.location = 'ad_sub.php?id=$id'</script>";
                    
                    
                   //$get_prdt_id = mysqli_query($conn, "SELECT * FROM items WHERE itm_id = '$itm'")
                    
                   
                      
                }
                
               
                ?>
