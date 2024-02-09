<?php
 include('db_connection.php');
$bill_master_id=$_REQUEST['bill_master_id'];

 $sql="update bill_master_details set P_Status='PAID' where bill_master_id='$bill_master_id'";
 
mysqli_query($conn,$sql);
?>
<script>
alert('values are updated...');
document.location="bill_view.php";
</script>