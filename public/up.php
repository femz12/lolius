<?php
//echo "Working";

$output = '';

if(isset($_FILES['file']['name'][0])){
    //echo "Okay";
    
    foreach($_FILES['file']['name'] as $keys => $values){
        if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'tech_file/' .$values)){
            
            //$output .='<div class = "col-md-3"><img src="tech_file/'.$values'" class="img-responsive"></div>';
            
            $output .= '<div class = "col-md-8 col-md-offset-2"><img src="tech_file/'.$values.'" class="img-responsive" /></div>';
            
            
            
            //$output = "<img src='tech_file/.$values.'/>";
            
            //$output= $values;
            
        }
    }
}

echo $output;
?>