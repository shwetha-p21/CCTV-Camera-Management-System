<?php
include('connection.php');
$D_B_ID=$_REQUEST['D_B_ID'];
$sql="delete from disributor_bill_details where D_B_ID='$D_B_ID'";
mysqli_query($conn,$sql);
?>


<script>
alert("values are deleted");
document.location="bill_view.php";
</script>