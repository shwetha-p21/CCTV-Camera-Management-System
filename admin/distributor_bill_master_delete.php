<?php
include('db_connection.php');
$bill_master_id=$_REQUEST['bill_master_id'];
$sql="delete from bill_details where bill_master_id='$bill_master_id' ";
mysqli_query($conn,$sql);

$sql1="delete from bill_master_details where bill_master_id='$bill_master_id' ";
mysqli_query($conn,$sql1);
?>
<script>
alert("values are deleted...");
document.location="bill_view.php";
</script>