<?php  
 include 'config.php';
 if($_POST){
     //$ref_id = $_POST['ref_id'];
     //$ref_email = $_POST['ref_email'];
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $name = mysqli_real_escape_string($conn, $_POST['name']);
     $biz_cate = mysqli_real_escape_string($conn, $_POST['biz_cate']);
     $gender = mysqli_real_escape_string($conn, $_POST['gender']);
     $biz_addr = mysqli_real_escape_string($conn, $_POST['biz_addr']);
     $biz_det = mysqli_real_escape_string($conn, $_POST['biz_det']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $date = mysqli_real_escape_string($conn, $_POST['date']);
     $biz_stage = mysqli_real_escape_string($conn, $_POST['biz_stage']);
     $biz_offer = mysqli_real_escape_string($conn, $_POST['biz_offer']);
     $web = mysqli_real_escape_string($conn, $_POST['web']);
     $phone = mysqli_real_escape_string($conn, $_POST['phone']);
     
     $get_email = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
     $get_email_count = mysqli_num_rows($get_email);
     if($get_email_count > 0){
         echo "1";
     }else{
         
         $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
          
         $reg = mysqli_query($conn, "INSERT INTO user (name, email, password, biz_cate, biz_offer, biz_stage, gender, biz_addr, biz_det, web, phone, date) VALUES ('$name', '$email', '$password', '$biz_cate', '$biz_cate',  '$biz_offer', '$gender', '$biz_addr', '$biz_det', '$web', '$phone', '$new')") or die(mysql_error());



         
         echo "registered";
         
     }
 }
         /*
          $ref_id;
                
                if($ref_id == ''){
                    
                    $yo = rand(1, 6); 
                $get = mysql_query("SELECT * FROM admins WHERE id = '$yo'");
                $det = mysql_fetch_assoc($get);
                
                $ad_name = $det['name'];
                $ad_email = $det['email'];
                $ad_bank = $det['bank'];
                $ad_accnum = $det['accnum'];
                $ad_acctype = $det['acctype'];
                $ad_phone = $det['phone'];
                $ad_id = $det['id'];
                
                $Today = date('y:m:d',time());
                $new = date('l, F d, Y', strtotime($Today));
			   $input_ref = mysql_query("INSERT INTO referer (name, email, phone, ref_name, ref_email, ref_phone, ref_bank, ref_accnum, ref_acctype, amount) VALUES ('$name', '$email', '$phone', '$ad_name', '$ad_email', '$ad_phone', '$ad_bank', '$ad_accnum', '$ad_acctype', '$amount' )") or die(mysql_error());
              
                $input = mysql_query("INSERT INTO member (ref_id, ref_email, name, email, password, amount, level, phone, date, type) VALUES (' $ad_id', '$ad_email', '$name', '$email', '$password', '$amount', '0', '$phone', '$new', 'Member')") or die(mysql_error());
                    
                    
                    ////log system
                     $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
			
            $input = mysql_query("INSERT INTO log (email, name, activity, time) VALUES 
            ('$email', '$name', 'New Registration', '$new')") or die (mysql_error());
            $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
			

            $get_info = mysql_query("SELECT * FROM stat WHERE name = 'New Registration' AND date = '$new'");
            $get_info_count = mysql_num_rows($get_info);
            
			if($get_info_count > 0){
				$Today = date('y:m:d',time());
				$new = date('l, F d, Y', strtotime($Today));
				
            $update = mysql_query("UPDATE stat SET count = count + 1 WHERE name = 'New Registration' AND date = '$new'") or die(mysql_error());
				}else{
                $Today = date('y:m:d',time());
				$new = date('l, F d, Y', strtotime($Today));
				
                $newday = mysql_query("INSERT INTO stat (name, count, date) VALUES ('New Registration', '1', '$new')") or die(mysql_error());
            }
                    
                echo "registered";
               
                
                }else if($ref_id != ''){
                    
                $get = mysql_query("SELECT * FROM member WHERE id = '$ref_id'");
                $det = mysql_fetch_assoc($get);
                
                 $ref_name = $det['name'];
                $ref_email = $det['email'];
                $ref_bank = $det['bank'];
                $ref_accnum = $det['accnum'];
                $ref_acctype = $det['acctype'];
                $ref_phone = $det['phone'];
                $ref_ids = $det['id'];
                $ref_type= $det['type'];
                    
                    if($ref_type == 'Admin'){
                        
                        
                        $input_ref = mysql_query("INSERT INTO referer (name, email, phone, ref_name, ref_email, ref_phone, ref_bank, ref_accnum, ref_acctype, amount) VALUES ('$name', '$email', '$phone',  '$ref_name', '$ref_email', '$ref_phone', '$ref_bank', '$ref_accnum', '$ref_acctype', '$amount' )") or die(mysql_error()); 
                    
                    $insert_level = mysql_query("INSERT INTO levels (referer_name, referer_email, ref_name, ref_email, level) VALUES ('$ref_name', '$ref_email', '$name', '$email', 'Level 1')") or die(mysql_error());
                    
                    $Today = date('y:m:d',time());
                    $new = date('l, F d, Y', strtotime($Today));
                    $input = mysql_query("INSERT INTO member (ref_id, ref_email, name, email, password, amount, level, phone, date, type) VALUES ('$ref_id', '$ref_email', '$name', '$email', '$password',  '$amount', '0', '$phone', '$new', 'Member')") or die(mysql_error());
                    
                    //$insert_register = mysql_query("INSERT INTO register (mother_id, mother_email, reg_email, reg_name) VALUES ('$ref_id', '$ref_email', '$email', '$name')") or die(mysql_error());
                
                              //This is the log creator and the bad guy that tell us what happens
                    $Today = date('y:m:d',time());
                    $new = date('l, F d, Y', strtotime($Today));
			
                    $input = mysql_query("INSERT INTO log (email, name, activity, time) VALUES 
                    ('$email', '$name', 'New Registration', '$new')") or die (mysql_error());
                    $Today = date('y:m:d',time());
                    $new = date('l, F d, Y', strtotime($Today));
			

                    $get_info = mysql_query("SELECT * FROM stat WHERE name = 'New Registration' AND date = '$new'");
                    $get_info_count = mysql_num_rows($get_info);

                    if($get_info_count > 0){
                        $Today = date('y:m:d',time());
                        $new = date('l, F d, Y', strtotime($Today));

                    $update = mysql_query("UPDATE stat SET count = count + 1 WHERE name = 'New Registration' AND date = '$new'") or die(mysql_error());
                        }else{
                        $Today = date('y:m:d',time());
                        $new = date('l, F d, Y', strtotime($Today));

                        $newday = mysql_query("INSERT INTO stat (name, count, date) VALUES ('New Registration', '1', '$new')") or die(mysql_error());

                            
                    }
                        
                        echo "registered";
                        
                    }else{
                
                    
                    
                    
                $sle_level = mysql_query("SELECT * FROM levels WHERE referer_email = '$ref_email'");
                $sle_level_count = mysql_num_rows($sle_level);
                    
                     if($sle_level_count != '2'){
                         
                         $input_ref = mysql_query("INSERT INTO referer (name, email, phone,  ref_name, ref_email, ref_phone, ref_bank, ref_accnum, ref_acctype, amount) VALUES ('$name', '$email', '$phone',  '$ref_name', '$ref_email', '$ref_phone', '$ref_bank', '$ref_accnum', '$ref_acctype', '$amount' )") or die(mysql_error()); 
                    
                    $insert_level = mysql_query("INSERT INTO levels (referer_name, referer_email, ref_name, ref_email, level) VALUES ('$ref_name', '$ref_email', '$name', '$email', 'Level 1')") or die(mysql_error());
                    
                    $Today = date('y:m:d',time());
                    $new = date('l, F d, Y', strtotime($Today));
                    $input = mysql_query("INSERT INTO member (ref_id, ref_email, name, email, password,  amount, level, phone, date, type) VALUES ('$ref_id', '$ref_email', '$name', '$email', '$password',  '$amount', '0', '$phone', '$new', 'Member')") or die(mysql_error());
                    
                    $insert_register = mysql_query("INSERT INTO register (mother_id, mother_email, reg_email, reg_name) VALUES ('$ref_ids', '$ref_email', '$email', '$name')") or die(mysql_error());
                    
                      //This is the log creator and the bad guy that tell us what happens
                     $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
			
            $input = mysql_query("INSERT INTO log (email, name, activity, time) VALUES 
            ('$email', '$name', 'New Registration', '$new')") or die (mysql_error());
            $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
			

            $get_info = mysql_query("SELECT * FROM stat WHERE name = 'New Registration' AND date = '$new'");
            $get_info_count = mysql_num_rows($get_info);
            
			if($get_info_count > 0){
				$Today = date('y:m:d',time());
				$new = date('l, F d, Y', strtotime($Today));
				
            $update = mysql_query("UPDATE stat SET count = count + 1 WHERE name = 'New Registration' AND date = '$new'") or die(mysql_error());
				}else{
                $Today = date('y:m:d',time());
				$new = date('l, F d, Y', strtotime($Today));
				
                $newday = mysql_query("INSERT INTO stat (name, count, date) VALUES ('New Registration', '1', '$new')") or die(mysql_error());
                
            }
                         
                         echo "registered";
                         
                     }else if($sle_level_count == '2'){
                         
                         
                $get = mysql_query("SELECT * FROM member WHERE id = '$ref_id'");
                $det = mysql_fetch_assoc($get);
                
                $ref_name = $det['name'];
                $ref_email = $det['email'];
                $ref_bank = $det['bank'];
                $ref_accnum = $det['accnum'];
                $ref_acctype = $det['acctype'];
                $ref_phone = $det['phone'];
                $ref_ids = $det['id'];
                    
                    $get_next = mysql_query("SELECT * FROM register WHERE mother_id = '$ref_ids' AND mother_email = '$ref_email' AND status = '' ORDER BY id ASC LIMIT 1");
                    $fetch_get_next = mysql_fetch_assoc($get_next);
                    
                    $guy_email = $fetch_get_next['reg_email'];
                     $guy_email;
                //    echo "<script>alert('$guy_email');</script>";
                    
                    ///get if the guy has refere anybody organically and count the number from referer
                    
                    $get_referer_email = mysql_query("SELECT * FROM referer WHERE ref_email = '$guy_email'");
                    $count_guy = mysql_num_rows($get_referer_email);
                         
                         if($count_guy == '2'){
                        
                        ///make him paired in the register
                        $update_register = mysql_query("UPDATE register SET status = 'PAIRED' WHERE reg_email = '$guy_email'");
                        
                        $get_next = mysql_query("SELECT * FROM register WHERE mother_id = '$ref_ids' AND mother_email = '$ref_email' AND status = '' ORDER BY id ASC LIMIT 1");
                        $fetch_get_next = mysql_fetch_assoc($get_next);
                    
                    $new_guy_email = $fetch_get_next['reg_email'];
                       
                        $new_guy_email;
                          //echo "<script>alert('$new_guy_email');</script>";
                        
                        $gt_guy_info = mysql_query("SELECT * FROM member WHERE email = '$new_guy_email'");
                        $ft_guy = mysql_fetch_assoc($gt_guy_info);
                        $ft_guy_name = $ft_guy['name'];
                        $ft_guy_email = $ft_guy['email'];
                        $ft_guy_phone = $ft_guy['phone'];
                        $ft_guy_bank = $ft_guy['bank'];
                        $ft_guy_accnum = $ft_guy['accnum'];
                        $ft_guy_type = $ft_guy['acctype'];
                        $ft_guy_id = $ft_guy['id'];
                        
                         $input_ref = mysql_query("INSERT INTO referer (name, email, phone,  ref_name, ref_email, ref_phone, ref_bank, ref_accnum, ref_acctype, amount) VALUES ('$name', '$email', '$phone',  '$ft_guy_name', '$ft_guy_email', '$ft_guy_phone', '$ft_guy_bank', '$ft_guy_accnum', '$ft_guy_type', '$amount' )") or die(mysql_error());
                        
                         $Today = date('y:m:d',time());
                         $new = date('l, F d, Y', strtotime($Today));
                         $input = mysql_query("INSERT INTO member (ref_id, ref_email, name, email, password,  amount, level, phone, date, type) VALUES ('$ft_guy_id', '$ft_guy_email', '$name', '$email', '$password',  '$amount', '0', '$phone', '$new', 'Member')") or die(mysql_error());
                        
                         $insert_level = mysql_query("INSERT INTO levels (referer_name, referer_email, ref_name, ref_email, level) VALUES ('$ft_guy_name', '$ft_guy_email', '$name', '$email', 'Level 1')") or die(mysql_error());
                        
                        $insert_registers = mysql_query("INSERT INTO register (mother_id, mother_email, reg_email, reg_name) VALUES ('$ref_ids', '$ref_email', '$email', '$name')") or die(mysql_error());
                  
                      //This is the log creator and the bad guy that tell us what happens
                     $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
			
            $input = mysql_query("INSERT INTO log (email, name, activity, time) VALUES 
            ('$email', '$name', 'New Registration', '$new')") or die (mysql_error());
            $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
			

            $get_info = mysql_query("SELECT * FROM stat WHERE name = 'New Registration' AND date = '$new'");
            $get_info_count = mysql_num_rows($get_info);
            
			if($get_info_count > 0){
				$Today = date('y:m:d',time());
				$new = date('l, F d, Y', strtotime($Today));
				
            $update = mysql_query("UPDATE stat SET count = count + 1 WHERE name = 'New Registration' AND date = '$new'") or die(mysql_error());
				}else{
                $Today = date('y:m:d',time());
				$new = date('l, F d, Y', strtotime($Today));
				
                $newday = mysql_query("INSERT INTO stat (name, count, date) VALUES ('New Registration', '1', '$new')") or die(mysql_error());
                
                    
                   // echo "<script>alert('$new_guy_email');</script>";
            }
                             
                             echo "registered";
                        
                         }else{
                             
                           ///pair him
                        $guy_email;
                        $gt_guy_info = mysql_query("SELECT * FROM member WHERE email = '$guy_email'");
                        $ft_guy = mysql_fetch_assoc($gt_guy_info);
                        $ft_guy_name = $ft_guy['name'];
                        $ft_guy_email = $ft_guy['email'];
                        $ft_guy_phone = $ft_guy['phone'];
                        $ft_guy_bank = $ft_guy['bank'];
                        $ft_guy_accnum = $ft_guy['accnum'];
                        $ft_guy_type = $ft_guy['acctype'];
                        $ft_guy_id = $ft_guy['id'];
                        
                        $input_ref = mysql_query("INSERT INTO referer (name, email, phone,  ref_name, ref_email, ref_phone, ref_bank, ref_accnum, ref_acctype, amount) VALUES ('$name', '$email', '$phone',  '$ft_guy_name', '$ft_guy_email', '$ft_guy_phone', '$ft_guy_bank', '$ft_guy_accnum', '$ft_guy_type', '$amount' )") or die(mysql_error());
                        
                         $Today = date('y:m:d',time());
                         $new = date('l, F d, Y', strtotime($Today));
                         $input = mysql_query("INSERT INTO member (ref_id, ref_email, name, email, password, amount, level, phone, date, type) VALUES ('$ft_guy_id', '$ft_guy_email', '$name', '$email', '$password',  '$amount', '0', '$phone', '$new', 'Member')") or die(mysql_error());
                        
                         $insert_level = mysql_query("INSERT INTO levels (referer_name, referer_email, ref_name, ref_email, level) VALUES ('$ft_guy_name', '$ft_guy_email', '$name', '$email', 'Level 1')") or die(mysql_error());
                        
                         $get = mysql_query("SELECT * FROM member WHERE id = '$ref_id'");
                $det = mysql_fetch_assoc($get);
                
                $ref_name = $det['name'];
                $ref_email = $det['email'];
                $ref_bank = $det['bank'];
                $ref_accnum = $det['accnum'];
                $ref_acctype = $det['acctype'];
                $ref_phone = $det['phone'];
                $ref_ids = $det['id'];
                        
                        $insert_registers = mysql_query("INSERT INTO register (mother_id, mother_email, reg_email, reg_name) VALUES ('$ref_ids', '$ref_email', '$email', '$name')") or die(mysql_error());
                  
                //This is the log creator and the bad guy that tell us what happens
                     $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
			
            $input = mysql_query("INSERT INTO log (email, name, activity, time) VALUES 
            ('$email', '$name', 'New Registration', '$new')") or die (mysql_error());
            $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
			

            $get_info = mysql_query("SELECT * FROM stat WHERE name = 'New Registration' AND date = '$new'");
            $get_info_count = mysql_num_rows($get_info);
            
			if($get_info_count > 0){
				$Today = date('y:m:d',time());
				$new = date('l, F d, Y', strtotime($Today));
				
            $update = mysql_query("UPDATE stat SET count = count + 1 WHERE name = 'New Registration' AND date = '$new'") or die(mysql_error());
				}else{
                $Today = date('y:m:d',time());
				$new = date('l, F d, Y', strtotime($Today));
				
                $newday = mysql_query("INSERT INTO stat (name, count, date) VALUES ('New Registration', '1', '$new')") or die(mysql_error());
                
                    //echo "<script>alert('Registration Successful....')</script>";
              //echo "<script>window.location = 'login.php'</script>";
                        //echo "<script>alert(OTHER PART OF THE SYSTEM (where the guy has not gotten organic referer));</script>";
                        
                        
                        
                    
                    }
                             
                             echo "registered";
                    
                    //echo "<script>alert(OTHER PART OF THE SYSTEM);</script>";
                    
                         }
                             
                         }

                         
                         
                     }
                
                    
                }
         
     }
 }
 
*/
?>