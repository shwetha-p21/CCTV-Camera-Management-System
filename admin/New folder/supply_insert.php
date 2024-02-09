<?php
include('db_connection.php');
$supplier_name=$_POST['supp_name'];
$supplier_address=$_POST['supp_address'];
$supplier_city=$_POST['supp_city'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
echo $sql = "insert into supplier_details values (null,'$supplier_name','$supplier_address','$supplier_city','$contact_no','$email_id')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="supplier_view.php";
</script>