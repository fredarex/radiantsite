<?php

$session_email = $_SESSION['customer_email'];

$sql = "SELECT * FROM customer WHERE customer_email='$session_email'";
$run_query = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($run_query);

$customer_id = $row['customer_id'];
$customer_name = $row['customer_name'];
$customer_email = $row['customer_email'];
$customer_pass = $row['customer_pass'];
$customer_country = $row['customer_country'];
$customer_city = $row['customer_city'];
$customer_contact = $row['customer_contact'];
$customer_address = $row['customer_address'];
$cus_image = $row['customer_image'];

?>





 <h1 align="center">Edit Your Account</h1>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label> Customer Name:</label>
    <input type="text" name="c_name" class="form-control"  value="<?php echo $customer_name; ?>" required>
    
    </div>

<div class="form-group">
    <label> Customer Email:</label>
    <input type="text" name="c_email" class="form-control"  value="<?php echo $customer_email; ?>"  required>
    
    </div>
    
    
<div class="form-group">
    <label> Customer Password:</label>
    <input type="password" name="c_pass" class="form-control"  value="<?php echo $customer_pass; ?>"  required>
    
    </div>

    <div class="form-group">
    <label> Customer Country:</label>
    <input type="text" name="c_country" class="form-control" value="<?php echo $customer_country; ?>"  required>
    
    </div>
    
    <div class="form-group">
    <label> Customer City:</label>
    <input type="text" name="c_city" class="form-control"  value="<?php echo $customer_city; ?>" required>
    </div>
    
    <div class="form-group">
    <label> Customer Contact:</label>
    <input type="text" name="c_contact" class="form-control"  value="<?php echo $customer_contact; ?>" required>
    
    </div>
    
    
    
    <div class="form-group">
    <label> Customer Address:</label>
    <input type="text" name="c_address" class="form-control"  value="<?php echo $customer_address; ?>" required>
    
    </div>
    
    <div class="form-group">
    <label> Customer Image:</label>
    <input type="file" name="c_image" class="form-control" form-height-custom >
        
    <img class="img-responsive" src="customer_images/<?php echo $cus_image; ?>"    alt="customer Image">
    
    </div>
    
    <div class="text-center">
<button name="update" class="btn btn-primary">
    <i class="fa fa-user-md"></i>Update New    
        
        </button>    
    
    </div>
    
</form> 
<?php
if(isset($_POST['update'])){
    $customer_name = $_POST['c_name'];
    $customer_email = $_POST['c_email'];
    $customer_pass = $_POST['c_pass'];
    $customer_country = $_POST['c_country'];
    $customer_city = $_POST['c_city'];
    $customer_contact = $_POST['c_contact'];
    $customer_address = $_POST['c_address'];

    $customer_image = '';

    if($_FILES['c_image']['name'] == ''){
        $customer_image = $cus_image;

    }else{
            $customer_image = $_FILES['c_image']['name'];
             $customer_tmp_image = $_FILES['c_image']['tmp_name'];
     move_uploaded_file($customer_tmp_image, 'customer_images/'.$customer_image.'');
    }


   

    $update_sql = "UPDATE customer SET customer_name='$customer_name', customer_email='$customer_email', customer_pass='$customer_pass', customer_country='$customer_country', customer_city='$customer_city', customer_contact='$customer_contact', customer_address='$customer_address', customer_image='$customer_image' WHERE customer_id='$customer_id'";
    $run_update_query = mysqli_query($con,$update_sql);
    if ($run_update_query) {
        echo "<script>alert('You have Edited Your Account  ')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
    }





}



?>

