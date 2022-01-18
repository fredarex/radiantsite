       <!--================Footer Area =================-->
            <footer class="footer_area border_none">
                <div class="container">
                    <div class="footer_widgets">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-6">
                                <aside class="f_widget f_about_widget">
                                <a class="navbar-brand" href="index.php?index" style="color:#696969">RADIANT.<span style="color:silver">INC</span></a>
                                    <p>Best choice for your online store. Let purchase it to enjoy now</p>
                                    <h6>Social:</h6>
                                    <ul>
                                        <li><a href="#"><i class="social_facebook"></i></a></li>
                                        <li><a href="#"><i class="social_twitter"></i></a></li>
                                      
                                        <li><a href="#"><i class="social_instagram"></i></a></li>
                               
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_info_widget">
                                    <div class="f_w_title">
                                        <h3>Information</h3>
                                    </div>
                                    <ul>
                                        
                                       

                                        <li><a href="#">Help Center</a></li>
                                      
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_service_widget">
                                    <div class="f_w_title">
                                        <h3>Customer Service</h3>
                                    </div>
                                    <ul>
                                          <li>
                                        <?php
                                        if(!isset($_SESSION['customer_email'])){
                                      ?>
                                       <a href="index.php">My Account</a>
                                       <?php  
                                        }else{

                                        ?>  
                                             <a href="customer/account.php?my_orders">My Account</a>
                                        <?php
                                        }

                                        ?>
                                        </li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_extra_widget">
                                    <div class="f_w_title">
                                        <h3>Extras</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Brands</a></li>
                                       
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_account_widget">
                                    <div class="f_w_title">
                                        <h3>My Account</h3>
                                    </div>
                                    <ul>
                                          <li>
                                        <?php
                                        if(!isset($_SESSION['customer_email'])){
                                      ?>
                                       <a href="checkout.php">My Account</a>
                                       <?php  
                                        }else{

                                        ?>  
                                             <a href="customer/account.php?my_orders">My Account</a>
                                        <?php
                                        }

                                        ?>
                                        </li>
                                      
                                        <li><a href="#">Newsletter</a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="footer_copyright">
                        <h5>© <script>document.write(new Date().getFullYear());</script> 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="/radiantsite/index.php?index" target="_blank">Radiant.inc</a>

</h5>
                    </div>
                </div>
            </footer>
            <!--================End Footer Area =================-->



 <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/mains.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="https://js.paystack.co/v1/inline.js"></script>
        <script>
            $(document).ready(function(){
                $('#payproduct').on('click',function(){
                    var handler = PaystackPop.setup({
                    key:'pk_test_0f4c88657df9780572e4550cb9306176d81d0c04',
                    email: "<?php echo $_SESSION['customer_email']; ?>",
                    amount: <?php echo $total * 100; ?>,
                    currency: "NGN",
                    ref: ''+Math.floor((Math.random() * 1000000000) + 1)+'',
                    callback: function(response) {
                        alert('success. transaction ref is ' + response.reference);
                    },
                    onClose: function(){
                        alert('window closed');
                    }
                });
                handler.openIframe();
                })
            });
           

        </script>
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
        
 <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>

        <script src="js/theme.js"></script>