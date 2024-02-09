<?php
include('db_connection.php');
$cust_id=$_REQUEST['cust_id'];
$sql="delete from customer_details where cust_id='$cust_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted...");
document.location="customer_view.php";
</script>