<?php
include('db_connection.php');
$supplier_id=$_POST['s_id'];
$supplier_payment_amt=$_POST['s_pamt'];
$description=$_POST['desc'];
$payment_date=$_POST['Payment_date'];
$supplier_payment_id=$_POST['supplier_payment_id'];
$sql ="update supplier_payment_details set supplier_id='$supplier_id',supplier_payment_amt='$supplier_payment_amt',description='$description',payment_date='$payment_date' where supplier_payment_id='$supplier_payment_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated");
document.location="supplier_payment_view.php";
</script>  
