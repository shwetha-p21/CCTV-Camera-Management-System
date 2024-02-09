<?php
include('db_connection.php');
$payment_id=$_REQUEST['payment_id'];
$sql="delete from customer_payment_details where payment_id='$payment_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted...");
document.location="customer_payment_view.php";
</script>