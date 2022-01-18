<?php

$con = mysqli_connect("localhost","root","","radiantsite");
    if(isset($_GET['p_cat'])) {
       $output = ''; 
    $p_cat_id = $_GET['p_cat'];
        
        
    $select = "SELECT * FROM product_categories WHERE p_cat_id= $p_cat_id";
        
    $run_query = mysqli_query($con,$select);
        
        if(mysqli_num_rows($run_query) == 0){
          $output = "No Products Found on the list";
            
            
        }else{
        
            $row = mysqli_fetch_assoc($run_query);
            
    $p_cat_title = $row['p_cat_title'];
            $p_cat_desc= $row['p_cat_desc'];
            
    $output = "
    <div class='box'>
    <h1>$p_cat_title</h1></br>
    <p> $p_cat_desc</p></br>
    </div>
    ";        
            
       }

       echo $output;
        
}


?>