<?php
include('db_connection.php');
$cust_id=$_POST['cust_id'];
$pro_id=$_POST['product_id'];
$order_qty=$_POST['quantity'];
$description=$_POST['desc'];
$order_date=$_POST['order_date'];
$sql="insert into order_details values(null,'$cust_id','$pro_id','$order_qty','$description','$order_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="order_details_view.php";
</script>
