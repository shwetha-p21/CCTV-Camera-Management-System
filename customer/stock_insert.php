<?php
include('db_connection.php');
$product_id=$_POST['pro_id'];
$stock=$_POST['stock'];
echo $sql = "insert into stock_details values (null,'$product_id','$stock')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="stock_view.php";
</script>