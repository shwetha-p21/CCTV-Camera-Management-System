<?php
include('db_connection.php');
$order_id=$_REQUEST['order_id'];
$sql="delete from order_details where order_id='$order_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted...");
document.location="order_details_view.php";
</script>