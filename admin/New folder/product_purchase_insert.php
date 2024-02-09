<?php
include('db_connection.php');
$product_id=$_POST['pro_id'];
$pro_qty=$_POST['quantity'];
$purchase_price=$_POST['pur_price'];
$discount=$_POST['discount'];
$supplier_id=$_POST['s_id'];
$purchase_date=$_POST['purchase_date'];


$sql="select * from stock_details where  product_id='$product_id'";
$res=$conn->query($sql);
  if($row=mysqli_fetch_array($res))
  {
  
  $stock=$row['stock']+$pro_qty;
  
  $sql = "insert into product_purchase_details values (null,'$product_id','$pro_qty','$purchase_price','$discount','$supplier_id','$purchase_date')";
mysqli_query($conn,$sql);

$sql2 = "update stock_details set stock='$stock' where product_id='$product_id'";
mysqli_query($conn,$sql2);
 
  }
  else
  {
  $sql = "insert into product_purchase_details values (null,'$product_id','$pro_qty','$purchase_price','$discount','$supplier_id','$purchase_date')";
mysqli_query($conn,$sql);

 $sql2 = "insert into stock_details values (null,'$product_id','$pro_qty')";
mysqli_query($conn,$sql2);
}
?>

<script>
alert("values are inserted");
document.location="product_purchase_view.php";
</script>