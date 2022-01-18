<?php
include('includes/header.php');

?>
        <!--================End Menu Area =================-->
        
        <!--================Categories Banner Area =================-->
      
        <!--================End Categories Banner Area =================-->
        
        <!--================Categories Product Area =================-->
     <?php

if (!isset($_SESSION['customer_email'])) {
    echo "<script>window.open('/radiantsite/checkout.php','_self')</script>";
}else{



?>


        <section class="categories_product_main p_80">
            <div class="container">
                <div class="categories_main_inner">
                    <div class="row row_disable">
                        <div class="col-lg-9 float-md-right">
<?php
        if(isset($_GET['my_orders'])){
            include("my_orders.php");
        }                        
                            
                            ?>                           
               
            <?php
        if(isset($_GET['pay_offline'])){
            include("pay_offline.php");
        }                        
                            
                            ?>                 
                            
                        <?php
        if(isset($_GET['edit_account'])){
            include("edit_account.php");
        }                        
                            
                            ?>  
                            
  <?php
        if(isset($_GET['change_pass'])){
            include("change_pass.php");
        }                        
                            
                            ?> 
                            
                            
          <?php
        if(isset($_GET['delete_account'])){
            include("delete_account.php");
        }                        
                            
                            ?>                          
                            
                            
                        </div>
                        <?php

                        $session_email = $_SESSION['customer_email'];

                        $sql = "SELECT * FROM customer WHERE customer_email = '$session_email'";
                        $query_sql = mysqli_query($con,$sql);

                        while($row=mysqli_fetch_assoc($query_sql)){
                            $customer_name = $row['customer_name'];
                            $customer_image = $row['customer_image'];
                        }

                        ?>


                        <div class="col-lg-3 float-md-right">
                            <div class="categories_sidebar">
                                <aside class="l_widgest l_p_categories_widget">
                                        
                                        <img src="<?php echo 'customer_images/'.$customer_image; ?>" width="250px" height="250px" >
                                    <h3 align="center" class="panel-title">
                       <?php echo $customer_name; ?>            
                                    </h3>
                               
                                </aside>
                                
                              
                                <aside class="l_widgest l_categories_widget">
                                  
                                    <ul>
<li class="<?php if(isset($_GET['my_orders'])){echo "active";}?>">
    <a href="account.php?my_orders">
    <i class="fa fa-list"></i>My Orders
    </a>
    </li>
                                        
<li class="<?php if(isset($_GET['pay_offline'])){echo "active";}?>">
    <a href="account.php?pay_offline">
    <i class="fa fa-bolt"></i>Pay Offline
    </a>
    </li>
                                        
        <li class="<?php if(isset($_GET['edit_account'])){echo "active";}?>">
            <a href="account.php?edit_account">
    <i class="fa fa-pencil"></i>Edit Account
    </a>
    </li> 
                                        
 <li class="<?php if(isset($_GET['change_pass'])){echo "active";}?>">
            <a href="account.php?change_pass">
    <i class="fa fa-user"></i>Change Password
    </a>
    </li>                  
        
     <li class="<?php if(isset($_GET['delete_account'])){echo "active";}?>">
            <a href="account.php?delete_account">
    <i class="fa fa-trash-o"></i>Delete Account
    </a>
    </li>  
                                        
                                        
      <li>
            <a href="logout.php">
    <i class="fa fa-sign-out"></i>Log Out
    </a>
    </li>                                      
                                        
                                    </ul>
                                </aside>
                               
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
        
        <!--================Footer Area =================-->
     <?php
        include ('includes/footer.php');

        ?>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
}

?>