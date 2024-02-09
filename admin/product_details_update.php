<?php
include('db_connection.php');
$product_name=$_POST['pro_name'];
$product_price=$_POST['pro_price'];
$product_description=$_POST['pro_desc'];
$product_model=$_POST['pro_mod'];

$product_id=$_POST['product_id'];


$product_image=$_FILES['pro_image']['name'];
$tmp_location=$_FILES['pro_image']['tmp_name'];
$target="../img/".$product_image;
move_uploaded_file($tmp_location,$target);

if (empty($product_image))
{
 $sql ="update product_details set product_name='$product_name',product_price='$product_price',product_description='$product_description',product_model='$product_model' where product_id='$product_id'";
mysqli_query($conn,$sql);
}
else
{

 $sql ="update product_details set product_name='$product_name',product_price='$product_price',product_description='$product_description',product_model='$product_model',product_image='$product_image' where product_id='$product_id'";
mysqli_query($conn,$sql);
}
?>
<script>
alert("values are updated");
document.location="product_view.php";
</script>
