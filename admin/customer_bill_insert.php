<?php
include('db_connection.php');
$cust_id=$_POST['cust_id'];
$product_id=$_POST['pro_id'];
$product_qty=$_POST['quantity'];
$pro_price=$_POST['price'];
$pro_discount=$_POST['discount'];
$date=$_POST['date'];
$sql = "insert into customer_bill_details values (null,'$cust_id','$product_id','$product_qty','$pro_price','$pro_discount','$date')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="customer_bill_view.php";
</script>