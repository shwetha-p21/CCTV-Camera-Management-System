<?php
include('db_connection.php');
$supplier_id=$_REQUEST['supplier_id'];
$sql="delete from supplier_details where supplier_id='$supplier_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted...");
document.location="supplier_view.php";
</script>