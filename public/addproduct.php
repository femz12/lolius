<?php  
include 'config.php';
if(!isset($_SESSION['email'])){
        
        echo "<script> window.location = 'index.php'</script>";
    }
    

   $email = $_SESSION['email'];

                    $itm_name = $_POST['itm_name'];
                    $itm_spec = $_POST['itm_spec'];
                    $itm_type = $_POST['itm_type'];
                    $itm_cate = $_POST['itm_cate'];
                    $sub_cate = $_POST['sub_cate'];
                    $city = $_POST['city'];
                    
                    $itm_price = $_POST['itm_price'];
                    $itm_qty = $_POST['itm_qty'];
                    $itm_des = $_POST['itm_des'];
                    $itm_id = $_POST['itm_id'];
                    $itm_qty = $_POST['itm_qty'];
                    $itm_size = $_POST['itm_size'];
                    $biz_name = $_POST['biz_name'];
                    $biz_loc = $_POST['biz_loc'];
                    $biz_lga = $_POST['biz_lga'];
                    $biz_email = $_POST['biz_email'];
                    $biz_add = $_POST['biz_add'];
                    $web = $_POST['biz_bustop'];
                    
                    $email = $_SESSION['email'];
                    $gets = mysqli_query($conn, "SELECT * FROM business WHERE email = '$email'");
                    $fet = mysqli_fetch_assoc($gets);
                    $lga = $fet['biz_lga'];
                    $web = $fet['web'];
                   
                    $ran_id = rand();
                    $itm_id = 'prdt_'.$ran_id; 
                    
                    $update = mysqli_query($conn, "UPDATE business SET t_code = '$itm_id' WHERE email = '$email'");

                    $insert = mysqli_query($conn, "INSERT INTO items (biz_id, biz_name, city, biz_loc, biz_lga, biz_add, biz_bustop, biz_email, itm_id, itm_name, itm_cate, sub_cate, itm_qty, itm_price, itm_size, itm_des, itm_spec, itm_type) VALUES ('$itm_id',
                    '$biz_name', '$city', '$biz_loc', '$lga', '$biz_add', '$web', '$biz_email', '$itm_id', '$itm_name', '$itm_cate', '$sub_cate', '$itm_qty', '$itm_price', '$itm_size', '$itm_des', '$itm_spec', '$itm_type')") or die(mysqli_error());
                        
                    $up = mysqli_query($conn, "UPDATE cate SET count = count + 1 WHERE category ='$itm_cate'") or die(mysqli_error());
                    
                   if($insert){
                       echo "registered";
                   }else{
                       echo "0";
                   }

?>