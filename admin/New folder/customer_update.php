<?php
include('db_connection.php');
$cust_name=$_POST['cust_name'];
$cust_address=$_POST['cust_address'];
$cust_city=$_POST['cust_city'];
$cust_contact_no=$_POST['cust_contact_no'];
$cust_email_id=$_POST['cust_email_id'];
$cust_id=$_POST['cust_id'];
echo $sql = "update customer_details set cust_name='$cust_name',cust_address='$cust_address',cust_city='$cust_city',cust_contact_no='$cust_contact_no',cust_email_id='$cust_email_id' where cust_id='$cust_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated");
document.location="customer_view.php";
</script>
