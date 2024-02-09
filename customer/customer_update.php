<?php
include('db_connection.php');
$cust_name=$_POST['cust_name'];
$cust_address=$_POST['cust_address'];
$cust_contact_no=$_POST['cust_contact_no'];
$cust_email_id=$_POST['cust_email_id'];
$cust_id=$_POST['cust_id'];
 $sql = "update customer_details set cust_name='$cust_name',cust_address='$cust_address',cust_contact_no='$cust_contact_no',cust_email_id='$cust_email_id' where cust_id='$cust_id'";
 mysqli_query($conn,$sql);
 $sql1="select * from register";
 $res1=mysqli_query($conn,$sql1);
 $row=mysqli_fetch_array($res1);
 $em=$row['email'];
 $sql2="update register set name='$cust_name',city='$cust_address',mobile='$cust_contact_no',email='$cust_email_id' where email='$cust_email_id'";
mysqli_query($conn,$sql2);
?>
<script>
alert("Customer details are updated");
document.location="customer_details_edit.php";
</script>
