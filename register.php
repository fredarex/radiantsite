
        <!--================Menu Area =================-->
       <?php
        include ('includes/header.php');
        ?>
        <!--================End Menu Area =================-->
        
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Register</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_100">
            <div class="container">
                
                <div class="row contact_details">
                    <div class="col-lg-12 ">
                       <h1>Register a new account</h1>
                    </div>
                </div>
                <div class="contact_form_inner">
                 
                    <form class="contact_us_form row" action="register.php" enctype="multipart/form-data" method="post">
                        <div class="form-group col-lg-4">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name *" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address *" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <input type="password" class="form-control" id="password" name="pwd" placeholder="Your Password" required>
                        </div>
                       
                         <div class="form-group col-lg-4">
                            <input type="text" class="form-control" id="country" name="country" placeholder="Your Country" required>
                        </div>
                        
                        
                         <div class="form-group col-lg-4">
                            <input type="text" class="form-control" id="country" name="city" placeholder="Your City" required>
                        </div>
                        
                         <div class="form-group col-lg-4">
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Your Contact" required>
                        </div>
                        
                        
                          <div class="form-group col-lg-4">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Your Address" required>
                        </div>
                        
                        
                          <div class="form-group col-lg-10">
                              <label>Your Profile Picture</label>
                            <input type="file" class="form-control"  name="image" required>
                        </div>
                        
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary" name="register">Register</button>
                        </div>
                    </form>
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
<!--
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

         Modals error 

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
-->
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      

  <?php

    if(isset($_POST['register'])){
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pwd'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        $add= $_POST['address'];
       
        $c_ip =  getrealipuser();
        $img_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($tmp_name,"customer/customer_images/$img_name");
        
        
        $cusquery = "INSERT INTO customer (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) VALUES ('$name','$email','$pass','$country','$city','$contact','$add','$img_name','$c_ip')";
        
        $run_it = mysqli_query($con,$cusquery);
        
        
        $cart = "SELECT * FROM cart WHERE ip_add = '$c_ip'";
        $run_cart = mysqli_query($con,$cart);
        
        $count_cart = mysqli_num_rows($run_cart);
      if($count_cart>0){
            
            $_SESSION['customer_email'] = $email;
            echo "<script>alert('you have successfully registered')</script>";
            echo "<script>window.open('/radiantsite/cart.php','_self')</script>";
            
            
            
        }else{
            $_SESSION['customer_email'] = $email;
            echo "<script>alert('you have successfully registered')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        
        
        
        
    }


?>
      
    </body>
</html>