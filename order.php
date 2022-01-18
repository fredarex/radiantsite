<?php
  session_start();
    include('functions/functions.php');
    include('includes/db.php');
    include('action.php');
   
?>


<?php

if (isset($_GET['c_id'])) {
	$customer_id = $_GET['c_id'];
}


$ip_add  = getrealipuser();
$status = "pending";
$invoice_no = mt_rand();
$cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";

$run_cart = mysqli_query($con,$cart);

while ($row = mysqli_fetch_assoc($run_cart)) {
	
	$pro_id = $row['p_id'];
	$qty   = $row['qty'];	


$sql = "SELECT * FROM products WHERE product_id='$pro_id'";
$run_sql = mysqli_query($con,$sql);

while($pro_row = mysqli_fetch_assoc($run_sql)){

	$product_price = $pro_row['product_price'];

	$sub_total = $product_price * $qty;


	$cusorder_insert  = "INSERT INTO customer_order(customer_id, due_amount, invoice_no, qty, order_date, order_status) VALUES('$customer_id','$sub_total','$invoice_no','$qty',NOW(),'$status') ";

	$run_insert = mysqli_query($con,$cusorder_insert);

	$pending_insert ="INSERT INTO pending_order(customer_id,invoice_no,product_id,qty,order_status) VALUES('$customer_id','$invoice_no','$pro_id','$qty','$status')";

	$run_pending_insert = mysqli_query($con,$pending_insert);

	$delete_sql = "DELETE FROM cart WHERE ip_add='$ip_add'";
	$run_delete =  mysqli_query($con,$delete_sql);

echo "<script>alert('Your orders has been submitted, Thanks')</script>";
echo "<script>window.open('customer/account.php?my_orders','_self')</script>";



}


}


//https://app.getpostman.com/join-team?invite_code=d89d35f7c68673b02c316d746119c513













?>