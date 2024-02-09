<?php
include('db_connection.php');
$product_id=$_POST['pro_id'];
$pro_qty=$_POST['quantity'];
$purchase_price=$_POST['pur_price'];
$discount=$_POST['discount'];
$supplier_id=$_POST['s_id'];
$purchase_date=$_POST['pur_date'];
$pro_purchase_id=$_POST['pro_purchase_id'];
echo $sql = "update product_purchase_details set product_id='$product_id',pro_qty='$pro_qty',purchase_price='$purchase_price',discount='$discount',supplier_id='$supplier_id',purchase_date='$purchase_date' where pro_purchase_id='$pro_purchase_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated");
document.location="product_purchase_view.php";
</script>