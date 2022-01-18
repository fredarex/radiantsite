<?php
$con = mysqli_connect("localhost","root","","radiantsite");

//get_cat




$html ="<div class='l_product_item'>
                              <div class='l_p_img'>
                              <a href='#' id='specialid' class='detail_id'>
              <img src='admin_area/product_images/specialimg' alt='' width='328px' height='166px'>
                                   <h5 class='new'>New</h5>
                                   </a>
                                            </div>
                                <div class='l_p_text'>
                                               <ul>
          
                 <li><a class='add_cart_btn detail_id' href='#' id='specialid'>Add To Cart</a></li>
            
                                 </ul>
                                                <h4>specialtitle</h4>
                                                <h5>specialprice</h5>
                                            </div>
                                        </div>";



// product categories for the book or magazine

if(isset($_POST['p_cat'])){
    
    $getp_cat = "SELECT * FROM product_categories";
    $run_getp_cat = mysqli_query($con,$getp_cat);
    
    while($row=mysqli_fetch_assoc($run_getp_cat)){
        $p_cat_id = $row['p_cat_id'];
        $p_cat_title = $row['p_cat_title'];
        $p_cat_desc = $row['p_cat_desc'];
        
        echo " <li><a href='' id='{$p_cat_id}' name='pcategory' class='clickp_cat'>$p_cat_title</a></li>";
    }
    
}
//ending product categories for the book or magazine





// starting the nav list for the page without clicking on the  book or the magazine of the product categories
    if(isset($_POST['pagepro'])){

$per_page = 6;
$output = '';
      if($_POST['page_p_cat'] == ''){
  $page_p_cat = $_POST['page_p_cat'];
        $page_pro_sql = "SELECT * FROM products";
        $run_page_pro = mysqli_query($con,$page_pro_sql);

        $countit = mysqli_num_rows($run_page_pro);

        $totals = ceil($countit/$per_page);


  $output .= "<li><a href='#' spage='1' id='pagers' p_cat='$page_p_cat'>firstpage</a></li>";
    
    
    for($i=1;$i<$totals;$i++){
        $output .= "<li><a href='#' spage='{$i}' id='pagers' p_cat='$page_p_cat'>{$i}</a></li>";
        
    }
  $output .= "<li><a href='#' spage='".$totals."' id='pagers' p_cat='$page_p_cat'>lastpage</a></li>";
     




      }

echo $output;

    }

//ending the nav list for the page without clicking on the book or the magazine of the product categories


    


//get the nav list for the page when the product categories is clicked

 if(isset($_POST['pagee'])){
        
    
    $output = '';
    $per_page = 6;
if($_POST['page_p_cat'] != ''){
  $page_p_cat = $_POST['page_p_cat']; 
$selectpro = "SELECT * FROM products WHERE p_cat_id = '$page_p_cat'";

$runselectpro = mysqli_query($con,$selectpro);   
 
    $count = mysqli_num_rows($runselectpro);
    
    $total  = ceil($count/$per_page);
    
   $output .= "<li><a href='#' page='1' id='pageno' p_cat='$page_p_cat'>firstpage</a></li>";
    
    
    for($i=1;$i<$total;$i++){
        $output .= "<li><a href='#' page='{$i}' id='pageno' p_cat='$page_p_cat'>{$i}</a></li>";
        
    }
  $output .= "<li><a href='#' page='".$total."' id='pageno' p_cat='$page_p_cat'>lastpage</a></li>";
     



}
     
    echo $output; 
    }

// ending the nav list for the page when the product categories is clicked




//get_product for the shop or other pages


if(isset($_POST['getpro'])){
     $per_page = 6;
    $output ='';
    
    $no;




if($_POST['pages'] !=''){
$page = $_POST['pages'];

}else{

  $page = 1;
}

        
    $start_page = ($page - 1) * $per_page;
    if($_POST['pattern']== 'checked'){
      $get_products ="SELECT * FROM products ORDER BY RAND() LIMIT 0,4";
      $no = 3;

    }else{

 $get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT $start_page,$per_page";
   $no = 4;
}

                                    
            
            $run_products = mysqli_query($con,$get_products);

     $count = mysqli_num_rows($run_products);
     if($count > 0){
while($row_products=mysqli_fetch_assoc($run_products)){
                    $pro_id = $row_products['product_id'];
                    
             $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
                    
            $pro_img1 = $row_products['product_img1']; 
                    
               $replace= str_replace("specialid", $pro_id, $html);
$replace1 = str_replace("specialimg", $pro_img1, $replace);
$replace2 = str_replace("specialprice", $pro_price, $replace1);
$replace3 = str_replace("specialtitle", $pro_title, $replace2);  

                    
$output .= "<div class='col-lg-{$no} col-sm-6 center-reponsive'>".$replace3."</div>";    
                    
       
                    
                } 

     }              
                  
    
   
    
    
    echo $output;
    
}


// end of getting product for the shop or the pages







// starting the page when click the book or magazine this will get the description and title of the selected product category


if(isset($_POST['get_pro_cat'])){


$GET_PRO_CAT = $_POST['id'];


$output = '';
$productsql = "SELECT * FROM product_categories WHERE p_cat_id='$GET_PRO_CAT'";
$run_productsql = mysqli_query($con,$productsql);

   if(mysqli_num_rows($run_productsql) == 0){
            
    $output .= "<br>No Products Found on the list";
            
            
        }else{
        
            $row = mysqli_fetch_assoc($run_productsql);
            
    $p_cat_title = $row['p_cat_title'];
            $p_cat_desc= $row['p_cat_desc'];
            
    $output .= "
    <h2 style='height:50px; display:block;'>$p_cat_title</h2><br>
    <br>
    <p style='padding-top: 50px; padding-right: 10px; padding-bottom: 30px; height:100px;'> $p_cat_desc</p><br>



    ";        
            
       }

       echo $output;


}


// ending the page when click the book or magazine this will get the description and title of the selectdd product category





//  getting the products  in the database when the magazine or  book is clicked 

if(isset($_POST['get_p_cat'])){

$get_p_cat = $_POST['id'];



$output = '';



if($_POST['page'] !='' && $_POST['id'] !='') { 
        
        $page = $_POST['page'];
        $get_p_cat = $_POST['id'];

      

        $no = 4;
  
    }else if ($_POST['page'] == '' && $_POST['id']!= ''){
      $page =1;
      $get_p_cat = $_POST['id'];



   $no = 4;
    }

$per_page = 6;


$start_page = ($page - 1) * $per_page;
  $get_product = "SELECT * FROM products WHERE p_cat_id ='$get_p_cat' ORDER BY 1 DESC LIMIT $start_page,$per_page";

$run_product = mysqli_query($con,$get_product);

     $count = mysqli_num_rows($run_product);
     if($count > 0){
while($row_products=mysqli_fetch_assoc($run_product)){
                    $pro_id = $row_products['product_id'];
                    
             $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
                    
            $pro_img1 = $row_products['product_img1']; 


$replace= str_replace("specialid", $pro_id, $html);
$replace1 = str_replace("specialimg", $pro_img1, $replace);
$replace2 = str_replace("specialprice", $pro_price, $replace1);
$replace3 = str_replace("specialtitle", $pro_title, $replace2);  

                    
$output .= "<div class='col-lg-{$no} col-sm-6 center-reponsive'>".$replace3."</div>";    
                    
                } 

     }              
                  
    






       echo $output;


}

// end of  getting the products  in the database when the magazine or  book is clicked 








// these get the product in the index.php page
if(isset($_POST['firstpro'])){

  $start = $_POST['start'];
  $limit = $_POST['limit'];

  $output = '';

$get_firstproducts = "SELECT * FROM products LIMIT $start,$limit";
 
$run_firstproducts = mysqli_query($con,$get_firstproducts);
    
  while($row_products=mysqli_fetch_assoc($run_firstproducts)){
      
    $pro_id = $row_products['product_id'];
      $pro_title = $row_products['product_title'];
      $pro_price = $row_products['product_price'];
      $pro_img1 = $row_products['product_img1'];
      

$replace= str_replace("specialid", $pro_id, $html);
$replace1 = str_replace("specialimg", $pro_img1, $replace);
$replace2 = str_replace("specialprice", $pro_price, $replace1);
$replace3 = str_replace("specialtitle", $pro_title, $replace2);  
      
$output .= "  ".$replace3."  <br>";      
      
  }

  echo $output;


}

// end of getting the product in the index.php page



















?>