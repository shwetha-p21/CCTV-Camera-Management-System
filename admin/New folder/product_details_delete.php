<?php
include('db_connection.php');
$product_id=$_REQUEST['product_id'];
$sql="delete from product_details where product_id='$product_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted...");
document.location="product_view.php";
</script>