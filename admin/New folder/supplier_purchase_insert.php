<?php
include('db_connection.php');
$Product_purchase_id=$_POST['pro_pur_id'];
$Product_id=$_POST['pro_id'];
$Pro_qty=$_POST[['quantity'];
$Purchase_price=$_POST['pur_price'];
$Discount=$_POST['discount'];
$Supplier_id=$_POST['s_id'];
$Purchase_date=$_POST['pur_date'];
echo $sql = "insert into product_purchase_details values (null,'$Product_purchase_id','$Product_id','$Pro_qty','$Purchase_price','$Discount','$Supplier_id','$Purchase_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="supplier_purchase_details.php";
</script>