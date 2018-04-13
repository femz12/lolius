<?php  

include '../config.php';

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
<!DOCTYPE html>
<html lang = "en">
	<head>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css" href = "css/style.css"/>
		<meta charset = "UTF-8" name= "viewport" content = "width=device-width, initial-scale=1" />
	</head>
<body>
	<nav class = "navbar navbar-default">
		<div class = "container-fluid">
			<a class = "navbar-brand" href = "https://www.sourcecodeter.com">Sourcecodester</a>
		</div>
	</nav>
	<div class = "row">
		<div class = "col-md-3">
		</div>
		<div class = "col-md-6 well" style = "z-index:99999;">
			<h3 class = "text-primary">Drag and Drop Image Upload with MySQLi</h3>
			<hr style = "border-top: 1px dotted #8c8b8b;"/>
			<a href = "index.php">Back</a>
			<table class = "table table-bordered table-hover">
				<thead>
					<tr>
						<th>Image Name</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$conn = new mysqli('localhost', 'root', '', 'image') or die(mysqli_error());
						$stmt= $conn->prepare("SELECT * FROM `photo`") or die(mysqli_error());
						if($stmt->execute()){
							$result = $stmt->get_result();
						}	
						while($fetch = $result->fetch_array()){						
					?>
					<tr>
						<td><?php echo $fetch['photo_name']?></td>
						<td><center><img src = "<?php echo 'upload/'.$fetch['photo_name']?>" height = "50px" width = "50px"/></center></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/upload.js"></script>
</html>