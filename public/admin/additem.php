 
<?php 
include 'config.php';

    if(!isset($_SESSION['email'])){
        
        echo "<script> window.location = 'index.php'</script>";
    }
    

   $email = $_SESSION['email'];
   
?>

<!doctype html>
<html lang="en">

<head>
	<title>Add Category</title>
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
			<h3 class="panel-title">Add Categories</h3>
            </div>
            <div class="panel-body">
               
            <form action="" method="post" enctype="multipart/form-data">                
            <div class="form-group"> 
            Category Name
            <input type="text" name="category" id="itm_price" class="form-control" placeholder="Name" value=""  required/>
            </div>
            <div class="form-group"> 
            Upload Category Image
            <input type="file" class="form-control" name = 'image'>
            </div>
            <input type="submit" name="btn-signup" class="btn btn-default btn-md" value="Continue">			
            </form>
			</div>
</div>
            </div>
            </div>
    
    <div class="main-content">
				<div class="container-fluid">
                    
					
                    <div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
                                    
                                    <?php 
                                    $id = $_GET['id']; 
                                    
                                    ?>
                                    <h3 class="panel-title">List of Categories </b></h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												
												<th>Id</th>
												<th>Category Name</th>
												<th>Number of Item</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
                                            <?php 
                                            //$ad_email = $det['email'];
                                            
                                            $get_ref_dir = mysqli_query($conn, "SELECT * FROM cate ORDER BY id ASC");
                                            while($rw = mysqli_fetch_assoc($get_ref_dir)){
                                            ?>
											<tr>
												
												<td><?php echo $rw['id']; ?></td>
												<td><?php echo $rw['category']; ?></td>
												<td><?php echo $rw['count']; ?></td>
                                                <td>
                                                    
                                                    <a href="view_sub.php?id=<?php echo $rw['id'] ?>" class = "btn btn-success btn-md">View Subcategory</a>
                                                   
                                                
                                                </td>
												<td>
                                                    
                                                    <a href="ad_sub.php?id=<?php echo $rw['id'] ?>" class = "btn btn-primary btn-md">Add Subcategory</a>
                                                   
                                                
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
        
        <footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2018. Designed &amp; Crafted by Lolius.com</a></p>
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
                    $category = $_POST['category'];
                    //$sub_category= $_POST['sub_category'];
                    //$name = $_POST['name'];
                    //$category = $cate;
                    
                    $image = (file_get_contents($_FILES['image']['tmp_name']));
                    $image_name = ($_FILES['image']['name']);
                    $image_size = getimagesize($_FILES['image']['tmp_name']);
                    move_uploaded_file($_FILES["image"]["tmp_name"], "pics/" . $_FILES["image"]["name"]);
                    $item_image = "pics/" . $_FILES["image"]["name"];
        
                    $insert = mysqli_query($conn, "INSERT INTO cate (category, pics) VALUES('$category', '$item_image')");
                    
                    
                   echo "<script>window.location = 'additem.php'</script>";
                    
                   
                      
                }
                
               
                ?>
