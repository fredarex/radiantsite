<?php

$db = mysqli_connect("localhost","root","","radiantsite");


//  begin getrealipuser functions //


function getrealipuser(){
    
    switch(true){
    case(!empty($_SERVER['HTTP_K_REAL_IP'])):
        return $_SERVER['HTTP_K_REAL_IP'];
            
    case(!empty($_SERVER['HTTP_K_FORWARDED_FOR'])):
    return $_SERVER['HTTP_K_FORWARDED_FOR'];
            
        
case(!empty($_SERVER['HTTP_CLIENT_IP'])) : 
            return $_SERVER['HTTP_CLIENT_IP'];

    
        default: return $_SERVER['REMOTE_ADDR'];
        
        
            
    }
}



function add_cart(){
    global $db;
    if(isset($_GET['add_cart'])){
        
        $p_id = $_GET['add_cart'];
        
         $ip_add = getrealipuser();
        $qty = $_POST['qty'];
        
$sql = "SELECT * FROM cart WHERE ip_add ='$ip_add' AND p_id = '$p_id'";
$run = mysqli_query($db,$sql);

if(mysqli_num_rows($run)>0){
    
    echo "<script>alert('product has been inserted to cart')</script>";
    echo "<script>window.open('details.php?id=$p_id','_self')</script>";
}else{
    
    $sqli = "INSERT INTO cart (p_id,ip_add,qty) VALUES ('$p_id','$ip_add','$qty')";
   $check =  mysqli_query($db,$sqli);
     echo "<script>window.open('details.php?id=$p_id','_self')</script>";
    
}
        
    }
   
}


function item(){
    global $db;
    $ip_add = getrealipuser();
    $sql = "SELECT * FROM cart WHERE ip_add ='$ip_add'";
    $query = mysqli_query($db,$sql);

    $numitem = mysqli_num_rows($query);
    echo $numitem;
} 


function totalprice(){
    
    global $db;
     $ip_add = getrealipuser();
    $sql = "SELECT * FROM cart WHERE ip_add ='$ip_add'";
    $query = mysqli_query($db,$sql);
         $total = 0;
    while($row = mysqli_fetch_assoc($query)){
     
      $p_id = $row['p_id'];
      $p_qty = $row['qty'];
        
    $productreq = "SELECT * from products WHERE product_id = '$p_id'";
    $run_product = mysqli_query($db,$productreq);
        
   
    while($row = mysqli_fetch_assoc($run_product)){
        
        $sub_total = $row['product_price'] * $p_qty;
        
         $total += $sub_total;
        
        
    }
        
        
    }
    echo $total;
    
}





function getpcats(){
  global $db;
    
$get_pcats = "select * from  product_categories";
 
$run_pcats = mysqli_query($db,$get_pcats);
    
  while($row_p_cats=mysqli_fetch_assoc($run_pcats)){
      
    $p_cat_id = $row_p_cats['p_cat_id'];
      $p_cat_title = $row_p_cats['p_cat_title'];
      
      
      
echo "

   <li class='nav-item'>
                                     <a class='nav-link' href='shop.php?p_cat=$p_cat_id'>
                                     $p_cat_title
                                              
                                          
                                            </a>
                                        </li>               

";      
}
}



























function getpcatpro(){

    global $db;
    if(isset($_GET['p_cat'])) {
       $output = ''; 
    $p_cat_id = $_GET['p_cat'];
        
        
    $select = "SELECT * FROM product_categories WHERE p_cat_id= $p_cat_id";
        
    $run_query = mysqli_query($db,$select);
        
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
}


function getproductcat(){
  global $db;
  if(isset($_GET['p_cat'])){
     $p_cat_id = $_GET['p_cat'];
            
    if(isset($_GET['page']) && isset($_GET['p_cat'])){
        
        $page = $_GET['page'];  
         $p_cat_id = $_GET['p_cat'];
    }else{
        $page = 1;
    }  
    $per_page = 6;
            
    $start_page = ($page - 1) * $per_page;
            
                
        
  $get_products ="SELECT * FROM products WHERE p_cat_id = $p_cat_id ORDER BY 1 DESC LIMIT $start_page,$per_page";
                                    
            $run_products = mysqli_query($db,$get_products);
                    
                while($row_products = mysqli_fetch_assoc($run_products)){
                    $pro_id = $row_products['product_id'];
                    
             $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
                    
            $pro_img1 = $row_products['product_img1']; 
                    
                echo "
               <div class='col-lg-4 col-sm-6 center-reponsive'>
                                        <div class='l_product_item'>
                              <div class='l_p_img'>
                              <a href='details.php?pro_id=$pro_id'>
              <img src='admin_area/product_images/$pro_img1' alt='' width='328px' height='166px'>
                                   <h5 class='new'>New</h5>
                                   </a>
                                            </div>
                                <div class='l_p_text'>
                                               <ul>
          
                 <li><a class='add_cart_btn' href='details.php?pro_id=$pro_id'>Add To Cart</a></li>
            
                                 </ul>
                                                <h4>$pro_title</h4>
                                                <h5>N$pro_price</h5>
                                            </div>
                                        </div>
                                    </div>
                
                ";    
                    
                }

                }
                }          
                    

    
        

        function navproductcat(){

         global $db;
        if(isset($_GET['p_cat'])){
    
         $p_cat_id = $_GET['p_cat'];
        
  $select = "select * from products WHERE p_cat_id = $p_cat_id";
                                
                                $query = mysqli_query($db,$select);
                                
                                
                                $per_page = 6;
                                
                                $total_page = mysqli_num_rows($query);
                                
                                $page = ceil($total_page/$per_page);
                                
                                
                                echo "<li><a href='shop.php?page=1&p_cat=$p_cat_id'>firstpage</a></li>";
    
            for($i=1; $i<$page;$i++){
                echo "<li><a href='shop.php?page=$i&p_cat=$p_cat_id'>$i</a>
                </li> ";
            }                    
                
    echo "<li><a href='shop.php?page=$page&p_cat=$p_cat_id'>lastpage</a></li>";
                                
                                
                                             } 

    
}

?>
   



                       
