<?php
include('db_connection.php');
$order_id=$_REQUEST['order_id'];
$sql="update order_details set order_status='Order Confirmed' where order_id='$order_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("Order Confirmed...");
document.location="order_details_view.php";
</script>