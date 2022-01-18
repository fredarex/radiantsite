

        <!--================Menu Area =================-->
      <?php
        include ('includes/header.php');
    
        ?>
        <!--================End Menu Area =================-->
        
        <!--================Categories Banner Area =================-->
    
        <!--================End Categories Banner Area =================-->
        
        <!--================Shopping Cart Area =================-->
        <section class="shopping_cart_area p_100 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart_items">
                            <form action="cart.php" method="post" enctype= "multipart/form-data">
                           
                            <?php
                            
                            $ip_add = getrealipuser();
                    $select = "SELECT * FROM cart WHERE ip_add = '$ip_add'";
                        $run_query = mysqli_query($con,$select);
                        $count = mysqli_num_rows($run_query);    
                            
                        
                            
                            
                            ?>
                            <h3>You have <?php echo $count  ?> Cart Items</h3>
                            <div class="table-responsive-md" style="{background:red}" >
                                <table class="table">
                                    <tbody>
                                        </tr>
                                            <th>Delete</th>
                                            <th>Product</th>
                                            <th>Product Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                        <tr>
                                        <?php
    
                                        $total = 0;
                                        while($row=mysqli_fetch_assoc($run_query)){
                                            $p_id = $row['p_id'];
                                            $p_qty = $row['qty'];
                                            
                                            
                                            $query = "SELECT * FROM products WHERE product_id = '$p_id'";
                                            $ru_query = mysqli_query($con,$query);
                                            
                                            while($row=mysqli_fetch_assoc($ru_query)){
                                                
                                                $product_title = $row['product_title'];
                                                $product_img1 = $row['product_img1'];
                                                $product_price = $row['product_price'];
                                                $sub_total = $row['product_price'] * $p_qty;
                                                $total += $sub_total;
                                        ?>
                                        <tr>

                                        
                                            <th scope="row">
                                                <input type="checkbox" name="remove[]" value="<?php echo $p_id; ?>" multiple> 
                                            </th>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="admin_area/product_images/<?php echo $product_img1; ?>" alt="">
                                                    </div>
                                                   
                                                </div>
                                            </td>
                                            <td><p class="red">N<?php echo $product_price; ?></p></td>
                                            <td>
                                                <div class="quantity">
                                                    <div class="custom">
                                                       <?php echo $p_qty ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p><?php echo $sub_total; ?></p></td>
                                  
                                        
                                        </tr>
                                       <?php
                                            }
                                        }
                                
                                ?>
                                        
                                        
                                        <tr>
                                            <th scope="row">
                                            </th>
                                        </tr>
                                        <tr class="last">
                                     
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                        <a href="index.php" class="btn btn-default" style="color:#000">
                                                        <i class="fa fa-chevron-left"></i>Continue Shopping
                                                        
                                                        </a>                             
                                                    </div>
                                                   
                                                </div>
                                            </td>
                                            <td><p class="red"></p></td>
                                            <td>
                                <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                    <i class="fa fa-refresh"></i>Update Cart                            
                                                
                                                </button> 
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
                    </div>
                    
                     
                
                    
                    
                    
                    
                    
                    <div class="col-lg-3 mx-2">
                        <div class="cart_totals_area">
                            <h4>Cart Totals</h4>
                            
                            <div class="total_amount row m0 row_disable">
                                <div class="float-left">
                                    Total
                                </div>
                                <div class="float-right">
                                   <?php echo $total; ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" value="submit" id="payproduct" class="btn subs_btn form-control">Proceed to checkout</button>
                    </div>
                </div>
            </div>
        </section>





<?php
                    function updatecart(){
                        global $con;
                        if(isset($_POST['update'])){
                            if($_POST['update'] == 'Update Cart'){

                                if($_POST['remove'] !=''){
                                   foreach($_POST['remove'] as $remove_id){
                                
                                $delete = "delete from cart where p_id = '$remove_id'";
                                $queri = mysqli_query($con,$delete);
                                
                                if($queri){
                                    echo "<script>window.open('cart.php','_self')</script>";
                                    
                                }else{
                                    echo "<script>window.open('cart.php','_self')</script>";
                                }
                                
                            } 
                        }else{
                          echo "<script>window.open('cart.php','_self')</script>";  
                        }
                            

                            }



                           
                        }
                        
                    }
                    
                   echo $update_cart = updatecart();
                    
                    ?>
        <!--================End Shopping Cart Area =================-->
        
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