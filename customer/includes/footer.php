       <!--================Footer Area =================-->
            <footer class="footer_area border_none">
                <div class="container">
                    <div class="footer_widgets">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-6">
                                <aside class="f_widget f_about_widget">
                                <a class="navbar-brand" href="/radiantsite/index.php?index">RADIANT.<span style="color:silver">INC</span></a>
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
                                       <a href="/radiantsite/customer/customer_login.php">My Account</a>
                                       <?php  
                                        }else{

                                        ?>  
                                             <a href="/radiantsite/customer/account.php?my_orders">My Account</a>
                                        <?php
                                        }

                                        ?>
                                        </li>
                                        <li><a href="my_orders.php">Order History</a></li>
                                        <li><a href="#">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="../contact.php">Contact Us</a></li>
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
                                        <a href="/radiantsite/customer/customer_login.php">My Account</a>
                                       <?php  
                                        }else{

                                        ?>  
                                             <a href="/radiantsite/customer/account.php?my_orders">My Account</a>
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