<?php
include('db_connection.php');
$cust_id=$_POST['cust_id'];
$payment_amt=$_POST['payment_amt'];
$payment_date=$_POST['payment_date'];
$description=$_POST['desc'];
$payment_id=$_POST['payment_id'];
echo $sql = "update customer_payment_details set cust_id='$cust_id',payment_amt='$payment_amt',payment_date='$payment_date',description='$description' where payment_id='$payment_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated");
document.location="customer_payment_view.php";
</script>