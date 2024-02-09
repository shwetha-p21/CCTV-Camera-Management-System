<?php
include('db_connection.php');
$supplier_id=$_POST['s_id'];
$supplier_payment_amt=$_POST['s_pamt'];
$description=$_POST['desc'];
$payment_date=$_POST['Payment_date'];
$sql = "insert into supplier_payment_details values (null,'$supplier_id','$supplier_payment_amt','$description','$payment_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="supplier_payment_view.php";
</script>  

