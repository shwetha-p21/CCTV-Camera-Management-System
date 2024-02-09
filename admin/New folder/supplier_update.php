<?php
include('db_connection.php');
$supplier_name=$_POST['supp_name'];
$supplier_address=$_POST['supp_address'];
$supplier_city=$_POST['supp_city'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$supplier_id=$_POST['supplier_id'];
$sql = "update supplier_details set supplier_name='$supplier_name',supplier_address='$supplier_address',supplier_city='$supplier_city',contact_no='$contact_no',email_id='$email_id' where supplier_id='$supplier_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated");
document.location="supplier_view.php";
</script>