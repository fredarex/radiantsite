<h1 align="center">Change Password</h1>
<form action="" method="post">
<div class="form-group">
    <label> Your Old Password</label>
    <input type="text" name="old_pass" class="form-control" required>
    
    </div>

<div class="form-group">
    <label> Your New Password</label>
    <input type="text" name="new_pass" class="form-control" required>
    
    </div>
    
    
    <div class="form-group">
    <label> Confirm Your New Password</label>
    <input type="text" name="new_pass_again" class="form-control" required>
    
    </div>
    

    
    <div class="text-center">
<button name="update" class="btn btn-primary">
    <i class="fa fa-user-md"></i>Update New    
        
        </button>    
    
    </div>
    
</form> 


<?php

if(isset($_POST['update'])){
    $session_email = $_SESSION['customer_email'];
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $new_pass_again = $_POST['new_pass_again'];


    $sql = "SELECT * FROM customer WHERE customer_pass='$old_pass'";
    $run_query = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($run_query);
    if($row == 0){
        echo "<script>alert('Sorry, Your Current Password is not Valid! Please try again')</script>";
        exit();
    }

    if($new_pass != $new_pass_again){
        echo "<script>alert('This password does not match')</script>";
        exit();
    }


    $sql_update = "UPDATE customer SET customer_pass='$new_pass' WHERE customer_email = '$session_email' ";
    $run_update_query = mysqli_query($con,$sql_update);

    if($run_update_query){
        echo "<script>alert('Your password has been edited')</script>";
        echo "<script>window.open('account.php?my_orders','_self')</script>";

    }



}


?>
