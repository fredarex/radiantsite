<?php
session_start();

?>

<?php
include('includes/db.php');
include('../functions/functions.php')
?>

<?php

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $select = "SELECT * FROM products WHERE product_id = '$product_id'";
    $run_query = mysqli_query($con,$select);
    
    $row = mysqli_fetch_assoc($run_query);
    
  
    $p_cat_id = $row['p_cat_id'];
    $pro_title = $row['product_title'];
    $pro_img1 = $row['product_img1'];
    $pro_img2 = $row['product_img2'];
    $pro_img3 = $row['product_img3'];
    $pro_price = $row['product_price'];
    $pro_desc = $row['product_desc'];
    
    
    
    $sql = "SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";
    
    $run = mysqli_query($con,$sql);
    
    $row = mysqli_fetch_assoc($run);
    
    $p_cat_title = $row['p_cat_title'];
    
    
    
    
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
     
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Menu Area =================-->
        <header class="shop_header_area carousel_menu_area">
             <div class="carousel_top_header black_top_header row m0">
                    <div class="container">
                        <div class="carousel_top_h_inner">
                            <div class="float-md-left">
                                <div class="top_header_left">
                                    
                                   
                                </div>
                            </div>
                            <div class="float-md-right">
                                <ul class="account_list">
                                      <li>
                                        <?php
                                        if(!isset($_SESSION['customer_email'])){
                                      ?>
                                       <a href="/radiantsite/customer/customer_login.php">My Account</a>
                                       <?php  
                                        }else{

                                        ?>  
                                             <a href="/radiantsite/customer/account.php?my_orders">My Account</a>
                                        <?php
                                        }

                                        ?>
                                        </li>
                                    <li><a href="/radiantsite/register.php">Register</a></li>
                                    <li><a href="/radiantsite/cart.php?mycart">Shopping Cart</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="carousel_top_header row m0">
                <div class="container">
                    <div class="carousel_top_h_inner">
                       <div class="float-md-left">
            <div class="top_header_middle">
                <?php
                if(!isset($_SESSION['customer_email'])){
                    
                    echo "<p>Welcome:Guest<p>";
                }else{
                    
                    echo "<p>Welcome:".$_SESSION['customer_email']."</p>";
                }
                
                ?>
             
            </div>
                        </div>
                           <div>
                        <p>   You have <?php item() ?> items in your cart | Total Price:<?php totalprice(); ?></p>
                        </div>
                                                <div class="float-md-right">
                            <div class="top_header_middle">
                                
                                    <?php
                                if(!isset($_SESSION['customer_email'])){
                                   echo "<a href='/radiantsite/customer/customer_login.php'><i class='fa fa-log-in'></i><span>login</span></a>";
                                }else{
                                    echo "<a href='logout.php'><i class='fa fa-log-out'></i><span>logout</span></a>";
                                }
                                
                                ?></a>
                                <a href="/radiantsite/register.php"><i class="fa fa-sign-up"></i> <span style="color:red">Register</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  <div class="carousel_menu_inner">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                             <a class="navbar-brand" href="../index.php">RADIANT.<span style="color:silver">INC</span></a>
        
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>

                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../index.php" role="button" aria-haspopup="true" aria-expanded="false">
                                        Home
                                        </a>
                                        
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="../shop.php" role="button" aria-haspopup="true" aria-expanded="false">
                                        Books
                                        </a>
                                       
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../cart.php">Cart</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
                                </ul>
                                <ul class="navbar-nav justify-content-end">
                                <div class="input-group">
          
          <input type="text" class="form-control" placeholder="search" name="user_query" required>
              
              <button type="submit" name="search" value="search" class="btn btn-primary" style="background:#000">
            <i class="fa fa-search"></i>
              </button>
          </div>
                                  <li class="user_icon">
                                        <?php
                                        if(!isset($_SESSION['customer_email'])){
                                      ?>
                                       <a href="/radiantsite/customer/customer_login.php"><i class="icon-user icons"></i></a>
                                       <?php  
                                        }else{

                                        ?>  
                                             <a href="/radiantsite/customer/account.php?my_orders"><i class="icon-user icons"></i></a>
                                        <?php
                                        }

                                        ?>
                                        </li>
                                  
                                  
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
        </header>