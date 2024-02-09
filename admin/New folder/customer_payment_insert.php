<?php
include('db_connection.php');
$cust_id=$_POST['cust_id'];
$payment_amt=$_POST['payment_amt'];
$payment_date=$_POST['payment_date'];
$description=$_POST['desc'];
echo $sql = "insert into customer_payment_details values (null,'$cust_id','$payment_amt','$payment_date','$description')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="customer_payment_view.php";
</script>