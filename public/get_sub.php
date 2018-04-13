<?php
include 'config.php';
if($_POST['id']){
    $id = $_POST['id'];
    
    $sts = mysqli_query($conn, "SELECT * FROM sub_cate WHERE cate_id = '$id'");
    ?>
<option selected="selected" style="color:black">Select SubCategory</option>
    
<?php
    while($rw = mysqli_fetch_assoc($sts)){  ?>
<option value="<?php echo $rw['cate_name']; ?>" style="color:black"><?php echo $rw['cate_name']; ?></option>

<?php
        
    }
}
?>