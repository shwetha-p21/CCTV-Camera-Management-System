<?php
include('db_connection.php');
$cust_bill_id=$_REQUEST['cust_bill_id'];
$sql="delete from customer_bill_details where cust_bill_id='$cust_bill_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted...");
document.location="customer_bill_view.php";
</script>