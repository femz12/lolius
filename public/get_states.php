<?php
include('dbconfig.php');
if($_POST['id'])
{
	$id=$_POST['id'];
		
	$stmt = mysqli_query($conn, "SELECT * FROM states WHERE country_id= '$id'");
	//$stmt->execute(array(':id' => $id));
	?>
<option selected="selected">Select State :</option>
<?php
	while($row=mysqli_fetch_assoc($stmt))
	{
		?>
        	<option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>
        <?php
	}
}
?>