<?php  
 include 'config.php';
 if($_POST){
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     
     $login = mysqli_query($conn, "SELECT * FROM technician WHERE email = '$email' AND password = '$password'");
     
     $login_count = mysqli_num_rows($login);
     
     if($login_count > 0) {
         
           $_SESSION['email'] = $email;
                
                $email = $_SESSION['email'];
                
                $get_nam = mysqli_query($conn, "SELECT * FROM technician WHERE email = '$email'");
                $gt = mysqli_fetch_assoc($get_nam);
                $name = $gt['name'];
    
                $Today = date('y:m:d',time());
                $new = date('l, F d, Y', strtotime($Today));
                
            $input = mysqli_query($conn, "INSERT INTO log (email, name, activity, time) VALUES 
            ('$email', '$name', 'Logged In', '$new')") or die (mysql_error());
            $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
			

            $get_info = mysqli_query($conn, "SELECT * FROM stat WHERE name = 'Logged In' AND date = '$new'");
            $get_info_count = mysqli_num_rows($get_info);
            
			if($get_info_count > 0){
				$Today = date('y:m:d',time());
				$new = date('l, F d, Y', strtotime($Today));
				
            $update = mysqli_query($conn, "UPDATE stat SET count = count + 1 WHERE name = 'Logged In' AND date = '$new'") or die(mysqli_error());
				}else{
                $Today = date('y:m:d',time());
				$new = date('l, F d, Y', strtotime($Today));
				
                $newday = mysqli_query($conn, "INSERT INTO stat (name, count, date) VALUES ('Logged In', '1', '$new')") or die(mysqli_error());
            }
         
         echo "registered";
         
     }else{
         
         echo "1";
     }
 }
     
     ?>