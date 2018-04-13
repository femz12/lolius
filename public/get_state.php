<?php
include('config.php');
if($_POST['id'])
{
	$id=$_POST['id'];
		
	$stmt = mysqli_query($conn, "SELECT * FROM locals WHERE state_id= '$id'");
	//$stmt->execute(array(':id' => $id));
	?>
<option selected="selected" style="color:black">Select LGA</option>
<?php
	while($row=mysqli_fetch_assoc($stmt))
	{
		?>
        	<option value="<?php echo $row['local_name']; ?>" style="color:black"><?php echo $row['local_name']; ?></option>
        <?php
	}
}

?>