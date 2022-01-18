<?php
   
        $session_email = $_SESSION['customer_email'];

$sql= "SELECT * FROM customer WHERE customer_email='$session_email'";

$run_sql = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($run_sql);

$customer_id = $row['customer_id'];



    


?>

<div class="box">
<h3 class="text-center">Payment options for you</h3>

    <p class="lead text-center">
    <a class="" href="order.php?c_id=<?php echo $customer_id; ?>">Offline Payment</a>
    
    </p>
<center>
    
    <p class="lead">
    
    <a href="#">
        Paypall Payment
        <img class="img-responsive" src="image/ben-white-148435-unsplash.jpg" alt="img-paypall">
        
        </a>
    
    
    </p>
    
    </center>
    
    
</div>