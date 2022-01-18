<?php
        include ('includes/header.php');
        ?>

<section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>login</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="/radiantsite/customer/customer_login.php">login</a></li>
                    </ul>
                </div>
            </div>
        </section>
<section class="checkout_method_area p_100">
            <div class="container">
                <div class="row">
                    <div class="checkout_main_area">
                        <div class="checkout_prosses">
                            <div class="row m0">
                         
                                <div class="col-md-8">
                                    <div class="row checkout_from_area">
                                       <h2>already registed ?</h2>
                                       <p>Please log in below :</p>
                                        <form role="form" action="customer_login.php" method="post">
                                            <div class="form-group">
                                                <label for="email">Email address <span>*</span></label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Password <span>*</span></label>
                                                <input type="password" class="form-control" id="pwd" name="pwd">
                                            </div>
                                            <h3>* Required Fields</h3>
                                            <div class="forgot_area">
                                                <button type="submit" class="btn update_btn btn-default" name="login" value="login">log in</button>
                                                <h4>Forgot Your Password ?</h4>
                                            </div>
                                        </form>
                                    </div>
                                    <div>
                                   <center>
                                    <a href="/radiantsite/register.php">
                                    <h5 style="color:#000">Don't have an account..?Register here</h5>
                                        </a>
                                    </center>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include ('includes/footer.php');

        ?>

<?php
       if(isset($_POST['login'])){
       $cloemail =   $_POST['email'];
        $clopass =   $_POST['pwd'];
        
        
        $ip_add = getrealipuser();
        
           $reqcart = "SELECT * FROM cart WHERE ip_add = '$ip_add'";
           $run_req = mysqli_query($con,$reqcart);
            $count_cart = mysqli_num_rows($run_req);
           
           
           $reqcus = "SELECT * FROM customer WHERE customer_email = '$cloemail' AND customer_pass = '$clopass'";
           $run_cus = mysqli_query($con,$reqcus);
           $count_cus = mysqli_num_rows($run_cus);
           
           
           if($count_cus == 0){
               
               echo "<script>alert('please enter the right password or email')</script>";
               exit();
               
           }
           
           if($count_cus >0 AND $count_cart ==0){
               
              
               $_SESSION['customer_email'] =  $cloemail;
                echo "<script>alert('You have login')</script>";
            echo "<script>window.open('/radiantsite/customer/account.php?my_orders','_self')</script>";
               
               
           }else{
               
               $_SESSION['customer_email'] = $cloemail;
                echo "<script>alert('You have login')</script>";
               echo "<script>window.open('/radiantsite/cart.php','_self')</script>";
               
               
           }
            
           
           
           
           
           
       }

?>