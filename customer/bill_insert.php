    <?php session_start();?>

<?php
include('db_connection.php');

$bmid=$_POST["bmid"];
$dat=$_POST["date"];
$c_id=$_POST["c_id"];
$p_id=$_POST["prodcut_id"];
$qnt=$_POST["qnt"];
$rate=$_POST["rate"];
$dic=$_POST["dic"];

$quant=$qnt;

 $sql="select max(bill_id) from  bill_details";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);


$bi=$row['bill_id'];
$bi=$bi+1;
  
   //$uname=$_SESSION["uname"];
//$sql_st="select * from suppliers where sup_email='$uname'";
//$res_st=$conn->query($sql_st);
//$row_st=mysqli_fetch_array($res_st);
		//rs_st.next();
		//$sup_id=$row_st["sup_id"];
		
  
 $sql_pro="select * from   stock_details  where product_id='$p_id'  ";
$res_pro=$conn->query($sql_pro);
if($row_pro=mysqli_fetch_array($res_pro))
{
	$c_stock=$row_pro["stock"];
	if($c_stock>=$quant)
	{
$c_stock=$row_pro["stock"];
 $cs_id=$c_stock - $quant;



  $sql_sp="select * from bill_master_details where bill_master_id='$bmid'";
  $res_sp=$conn->query($sql_sp);
		if($row_sp=mysqli_fetch_array($res_sp))
		{
		 $sql1="insert into bill_details values(null,'$p_id','$qnt','$rate','$dic','$bmid')";
		$conn->query($sql1);
		$sql2="update  stock_details set stock='$cs_id' where product_id='$p_id'  ";
		$conn->query($sql2);
		}
		else
		{
		
		$sql1="insert into bill_details values(null,'$p_id','$qnt','$rate','$dic','$bmid')";
		$conn->query($sql1);
		$sql3="insert into  bill_master_details values('$bmid','$c_id','$dat','UNPAID')";
		$conn->query($sql3);
		$sql2="update   stock_details set stock='$cs_id' where product_id='$p_id' ";
		$conn->query($sql2);
	
		
		}
 
?>
<script>
alert("Product Added To Your Bill");
document.location="bill.php?bmid=<?php echo $bmid;?>&c_id=<?php echo $c_id; ?>";
</script>

<?php
}
}
else
{
?>
<script>
alert("Please Add Stock Details");
history.back();
</script>
<?php
}
?>