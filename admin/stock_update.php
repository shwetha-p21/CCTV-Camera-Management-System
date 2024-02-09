<?php
include('db_connection.php');
$product_id=$_POST['pro_id'];
$stock=$_POST['stock'];
$stock_id=$_POST['stock_id'];
echo $sql = "update stock_details set product_id='$product_id',stock='$stock' where stock_id='$stock_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated");
document.location="stock_view.php";
</script>