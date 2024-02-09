<?php
include('db_connection.php');
$cust_id=$_POST['cust_id'];
$product_id=$_POST['pro_id'];
$product_qty=$_POST['quantity'];
$pro_price=$_POST['price'];
$pro_discount=$_POST['discount'];
$date=$_POST['date'];
$cust_bill_id=$_POST['cust_bill_id'];
echo $sql = "update customer_bill_details set cust_id='$cust_id',product_id='$product_id',product_qty='$product_qty',pro_price='$pro_price',pro_discount='$pro_discount',date='$date' where cust_bill_id='$cust_bill_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated");
document.location="customer_bill_view.php";
</script>
