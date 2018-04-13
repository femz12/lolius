<?php
include('config.php');
if($_POST['id'])
{
	$id=$_POST['id'];
		
	$stmt = mysqli_query($conn, "SELECT * FROM brand WHERE dev_id= '$id'");
	//$stmt->execute(array(':id' => $id));
	?>
<option selected="selected" style="color:black">Select Brand</option>
<?php
	while($row=mysqli_fetch_assoc($stmt))
	{
		?>
        	<option value="<?php echo $row['name']; ?>" style="color:black"><?php echo $row['name']; ?></option>
        <?php
	}
}

?>