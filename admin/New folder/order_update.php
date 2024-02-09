<?php
include('db_connection.php');
$cust_id=$_POST['cust_id'];
$pro_id=$_POST['product_id'];
$order_qty=$_POST['quantity'];
$description=$_POST['desc'];
$order_date=$_POST['order_date'];
$order_id=$_POST['order_id'];
$sql="update order_details set cust_id='$cust_id',pro_id='$pro_id',order_qty='$order_qty',description='$description',order_date='$order_date' where order_id='$order_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are update");
document.location="order_details_view.php";
</script>
