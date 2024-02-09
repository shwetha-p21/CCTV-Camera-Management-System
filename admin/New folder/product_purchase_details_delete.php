<?php
include('db_connection.php');
$pro_purchase_id=$_REQUEST['pro_purchase_id'];
$sql="delete from product_purchase_details where pro_purchase_id='$pro_purchase_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted...");
document.location="product_purchase_view.php";
</script>