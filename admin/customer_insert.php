<?php
include('db_connection.php');
$cust_name=$_POST['cust_name'];
$cust_address=$_POST['cust_address'];
$cust_contact_no=$_POST['cust_contact_no'];
$cust_email_id=$_POST['cust_email_id'];
 
 $sql = "insert into customer_details values (null,'$cust_name','$cust_address','$cust_contact_no','$cust_email_id')";
mysqli_query($conn,$sql);

?>
<script>
alert("values are inserted");
document.location="customer_view.php";
</script>

	