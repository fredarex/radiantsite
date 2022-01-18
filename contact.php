
        <!--================Menu Area =================-->
       <?php
        include ('includes/header.php');
        ?>
        <!--================End Menu Area =================-->
        
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_100">
            <div class="container">
                
                <div class="row contact_details">
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <p>36, ajao estate,<br />lagos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="tel:+08168168391">08168168391</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="mailto:radiantsite@gmail.com">radiantsite@gmail.com</a>
                                <a href="mailto:radiantsite@gmail.com">radiantsite@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_form_inner">
                    <h3>Drop a Message</h3>
                    <form class="contact_us_form row" action="contact.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="form-group col-lg-4">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name *">
                        </div>
                        <div class="form-group col-lg-4">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address *">
                        </div>
                        <div class="form-group col-lg-4">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Type Your Message..."></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" name="submit" class="btn update_btn form-control">Send Message</button>
                        </div>
                    </form>
                    
                    
                    <?php 
                    if(isset($_POST['submit'])){
                        $sender_name = $_POST['name'];
                        $sender_email = $_POST['email'];
                        $sender_subject =  $_POST['subject'];
                        $sender_message = $_POST['message'];
                        $receiver_mail = "jumbofreddy@yahoo.com";
                        // send to admin  
                        
                        mail($receiver_mail,$sender_name,$sender_subject,$sender_message,$sender_email);
                        
                        
                        // auto reply 
                        $email = $_POST['email'];
                        $subject = "Welcome to my website";
                        $message = "You will get an answer as soon as possible";
                        
                        $from = "jumbofreddy@yahoo.com";
                        mail($email,$subject,$message,$from);
                        
                        echo "Your message have been sent successfully";
                        
                    }
                    
                    
                    ?>
                    
                    
                </div>
            </div>
        </section>
        <!--================End Contact Area =================-->
        
        <!--================Footer Area =================-->
         <?php
        include ('includes/footer.php');

        ?>
        <!--================End Footer Area =================-->
        
        
        
        <!--================Contact Success and Error message Area =================-->
      
        <!--================End Contact Success and Error message Area =================-->
        
        
        
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
        
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>