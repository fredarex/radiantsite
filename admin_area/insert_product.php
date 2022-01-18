<?php

include 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
<title>insert products</title>    
    

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap-337.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/vertical-slider/css/jQuery.verticalCarousel.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">    
   
    
    </head>


    <body>
   <div class="row">
        
        <div class="col-lg-12">
        <ol class="breadcrumb">
<li class="active">
    <i class="fa fa-dashboard"></i>Dashboard / Insert Products
    
            
            </li>    
            
    
    </ol>
        
        </div> 
        </div> 
       
    <div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
       
<div class="panel-heading">
        
     <h3 class="panel-title">
    <i class="fa fa-money fa-fw"></i>Insert Product
    </h3>   
        </div>
<div class="panel-body">
    <form method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
    <label class="col-md-3 control-label">Product Title</label>    
        
       <div class="col-md-6">
        <input name="product_title" type="text" class="form-control" required>
        </div> 
        </div>
        
        
        <div class="form-group">
    <label class="col-md-3 control-label">Product Categories</label>    
        
       <div class="col-md-6">
       <select name="product_cat" class="form-control">
         <option>Select a Category Product</option>  
     <?php
        
        $get_p_cats = "select * from product_categories";
           $run_p_cats = mysqli_query($con,$get_p_cats);
           
           
           while($row_p_cats=mysqli_fetch_assoc($run_p_cats)){
               $p_cat_id = $row_p_cats['p_cat_id'];
               $p_cat_title = $row_p_cats['p_cat_title'];
     
               
            echo "<option value='$p_cat_id'>$p_cat_title</option>";     
               
           }
           ?>      
           
           
           </select>
        </div> 
        </div>
        
         <div class="form-group">
    <label class="col-md-3 control-label">Product Image 1</label>    
        
       <div class="col-md-6">
        <input name="product_img1" type="file" class="form-control" required>
        </div> 
        </div>
        
     <div class="form-group">
    <label class="col-md-3 control-label">Product Image 2</label>    
        
       <div class="col-md-6">
        <input name="product_img2" type="file" class="form-control">
        </div> 
        </div>
        
        
         <div class="form-group">
    <label class="col-md-3 control-label">Product Image 3</label>    
        
       <div class="col-md-6">
        <input name="product_img3" type="file" class="form-control">
        </div> 
        </div>
        
         <div class="form-group">
    <label class="col-md-3 control-label">Product Price</label>    
        
       <div class="col-md-6">
        <input name="product_price" type="text" class="form-control" required>
        </div> 
        </div>
        
        
         <div class="form-group">
    <label class="col-md-3 control-label">Product Keywords</label>    
        
       <div class="col-md-6">
        <input name="product_keywords" type="text" class="form-control" required>
        </div> 
        </div>
        
        
        <div class="form-group">
    <label class="col-md-3 control-label">Product Desc</label>    
        
       <div class="col-md-6">
        <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
        </div> 
        </div>
        
         <div class="form-group">
    <label class="col-md-3 control-label"></label>    
        
       <div class="col-md-6">
<input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
        </div> 
        </div>
        
        
    </form>    
        
        </div>        

        
        </div>    
        
        </div>    
        
        </div>    
        
        
        
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
        
            <script src="js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script> 
        
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/theme.js"></script>
    </body>
    
    
</html>

<?php

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
   $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
     
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
    
    
$insert_product = "insert into products (p_cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keyword,product_desc) values('$product_cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";    
    
$run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        echo "<script>alert('Product has been inserted successfully')</script>";
echo "<script>window.open('insert_product.php','_self')</script>";        
    }
    
}

?>


