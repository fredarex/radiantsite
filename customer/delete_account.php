<center>
<h1>Do You Really Want To Delete Your Account</h1>
<form action="" method="post">
    <input type="submit" name="yes" value="yes, i want to delete" class="btn btn-danger">
    
<input type="submit" name="no" value="no, i don't want to delete" class="btn btn-primary">
    
    </form>
    
    
</center>


<?php
$session_email = $_SESSION['customer_email'];
if (isset($_POST['yes'])) {
	

$sql = "DELETE FROM customer WHERE customer_email = '$session_email'";
$run_query = mysqli_query($con,$sql);

if ($run_query) {
	session_destroy();
	echo "<script>alert('Data has been deleted')</script>";
	echo "<script>window.open('../index.php','_self')</script>";

}





}


if(isset($_POST['no'])){

	
    echo "<script>window.open('account.php?my_orders','_self')</script>";
}






?>