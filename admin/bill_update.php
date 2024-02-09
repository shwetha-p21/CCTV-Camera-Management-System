<?php
include('connection.php');
$D_B_ID=$_POST['D_B_ID'];
$Prod_ID=$_POST['pid'];
$Quantity=$_POST['qty'];
$Price=$_POST['price'];
$Discount=$_POST['dis'];
$GST=$_POST['gst'];
$TAX=$_POST['tax'];
$D_M_ID=$_POST['dbid'];

 $sql="update disributor_bill_details set D_B_ID='$D_B_ID',Prod_ID='$Prod_ID',
Quantity='$Quantity',Price='$Price',Discount='$Discount',GST='$GST',TAX='$TAX',
D_M_ID='$D_M_ID' where D_B_ID='$D_B_ID'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are Updated..");
document.location="bill_view.php";
</script>