<?php
include('db_connection.php');
$supplier_payment_id=$_REQUEST['supplier_payment_id'];
$sql="delete from supplier_payment_details where supplier_payment_id='$supplier_payment_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted...");
document.location="supplier_payment_view.php";
</script>