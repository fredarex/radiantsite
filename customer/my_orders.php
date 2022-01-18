<center>
<h1>My Orders</h1>
<p class="lead">Your Orders on one place</p>
<p class="text-muted">
    if you have any questions, feel free to <a href="../contact.php">Contact Us</a>. Our Customer Service work <strong>24/7</strong>
    </p>
</center>

<hr>


<div class="table-responsive">
<table class="table table-bordered table-hover">
    
    <thead>
    <tr>
        
        <th>ON: </th>
        <th>Due Amount: </th>
        <th>Invoice No: </th>
        <th>Qty: </th>
       
        <th>Order Date:</th>
        <th>Paid / Unpaid: </th>
        <th>Status: </th>
        
        </tr>
    
    
    </thead>
    
    <tbody>
        <?php
        
        $customer_id ='';
        $session_email = $_SESSION['customer_email'];

        $sql = "SELECT * FROM customer WHERE customer_email='$session_email'";
        $run_query = mysqli_query($con,$sql);
        while ($row=mysqli_fetch_assoc($run_query)) {
            $customer_id .= $row['customer_id'];
        }

        $newsql = "SELECT * FROM customer_order WHERE customer_id = '$customer_id'";
        $run_sql_query = mysqli_query($con,$newsql);

        $i = 0;
        while ($row=mysqli_fetch_assoc($run_sql_query)) {
            $order_id = $row['order_Id'];
            $due_amount = $row['due_amount'];
            $invoice_no = $row['invoice_no'];
            $qty =    $row['qty'];
            $order_date = substr($row['order_date'], 0,11);
            $order_status = $row['order_status'];

            if ($order_status == 'pending') {
                $order_status = 'Unpaid';
            }else{
                $order_status = 'paid';
            }


            $i++;

        ?>



    <tr>
        <th><?php echo $i; ?></th>
        
        <td><?php echo $due_amount; ?></td>
        <td><?php echo $invoice_no; ?></td>
        <td><?php echo $qty; ?></td>
      
        <td><?php echo $order_date; ?></td>
        <td><?php echo $order_status; ?></td>
        
<td>
<a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm">Confirm Paid</a>        
        </td>        
        </tr>
        
        <?php

}
        ?>

        
    </tbody>
    
    </table>


</div>