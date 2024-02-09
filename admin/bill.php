<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <?php include('metadata.php');?>
	 <?php include('header.php');?>
	 <?php include('sidebar.php');?>	
</head>
<body>
 
        <!--/. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Bill  Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bill  Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                  
						
<?php include('val.php'); ?>
<script type="text/javascript">
<!-- Begin
function startCalc(){
  interval = setInterval("calc()",1);
}
function calc(){
tot=(parseInt(document.formID.rate.value) * parseInt(document.formID.qnt.value));
dic=(parseInt(document.formID.dic.value));
t=(tot-dic);
document.formID.total.value=t;

}
function stopCalc(){
  clearInterval(interval);
}
//  End -->

function pamt()
{
 var pid=document.getElementById("product_id").value;

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    var res=xmlhttp.responseText;
	
	document.getElementById("rate").value=res;
	
    }
  }
xmlhttp.open("GET","getrate.php?pid="+pid,true);
xmlhttp.send();
}

</script>


<?php include('db_connection.php'); ?>
<?php

$bmid=$_REQUEST["bmid"];
$c_id=$_REQUEST["c_id"];
$cu_id=0;


if($c_id!=null)
{
 $cu_id=$c_id;
}


$bmi=0;
$bm_id=0;

if($bmid==null)
{
  $sql="select max(bill_master_id) as id from  bill_master_details";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
  $bmi=$row['id'];
  $bmi=$bmi+1;
}
else
{
 //$bm_id=$bmi;

  $bmi=$bmid+0;
}



$dat=date('d-m-Y');
?>

<form name="formID" ID="formID" method="post" action="bill_insert.php">
<table class="table table-striped">
    <tr>
      <th width="47%" colspan="2">Bill No 
			
        <input name="bmid" type="text" id="bmid" value="<?php echo $bmi; ?>" size="5" readonly=""></th>
      <th  colspan="3">Date <input name="date" type="text" value="<?php echo $dat; ?>"> </div></th>
    </tr>
    <tr>
      <td colspan="2">Select Customer
        <select name="c_id" id="c_id" class="validate[required] form-control" >
          <option value="">Select Customer</option>
		  <?php
$uname=$_SESSION["uname"];
		  $sql_sp="select * from  customer_details ";
		  $res_sp=$conn->query($sql_sp);
		while($row_sp=mysqli_fetch_array($res_sp))
		{
		$cid=$row_sp["cust_id"];
		?>
		<option value="<?php echo $cid; ?>" <?php if($cid==$cu_id) { ?> selected <?php }?>><?php echo $row_sp["cust_name"]; ?></option>
		<?php
		}
		  ?>
        </select> </td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <th>Select Product </th>
      <th>Rate</th>
      <th>Quantity</th>
      <th>Discount</th>
      <th>Total</th>
    </tr>
    <tr>
      <td><select name="prodcut_id" id="product_id"  class="validate[required]" onChange="pamt()">
        <option value="">Select Procuct</option>
        <?php
		  $sql_p="select * from  product_details";
		  $res_p=$conn->query($sql_p);
		while($row_p=mysqli_fetch_array($res_p))
		{
		?>
        <option value="<?php echo $row_p["product_id"]; ?>"><?php echo $row_p["product_name"]; ?></option>
        <?php
		}
		 ?>
      </select></td>
      <td><input name="rate" type="text" id="rate"  class="validate[required,custom[onlyNumber]] " size="15" onFocus="startCalc();" onBlur="stopCalc();"></td>
      <td><input name="qnt" type="text" id="qnt"  class="validate[required,custom[onlyNumber]]" size="10" onFocus="startCalc();" onBlur="stopCalc();"></td>
      <td><input name="dic" type="text" id="dic"  class="validate[required,custom[onlyNumber]]"  onFocus="startCalc();" onBlur="stopCalc();" value="0" size="5"></td>
      <td><input name="total" type="text" id="total" size="15" readonly=""><br>
        <input type="submit" name="Submit" value="Add Product" class="btn btn-primary"></td>
    </tr>
  </table>
  <table class="table table-striped">
    <tr>
      <th>Sl NO</th>
      <th>Product Name </th>
      <th>Rate</th>
      <th>Qnt</th>
      <th>Total</th>
    </tr>
	<?php
	$slno=0;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	
		$sql_od="select * from  bill_details bd,product_details p where bd.product_id=p.product_id and bd.bill_master_id='$bmid' ";
		
		$res_od=$conn->query($sql_od);
		while($row_od=mysqli_fetch_array($res_od))
		{
		$slno=$slno+1;
		$bill_id=$row_od["bill_master_id"];
		$pid=$row_od["product_id"];
		
		 $qnt=$row_od["P_Quantity"];
		 $rate=$row_od["Rate"];
		 $dic=$row_od["Discount"];
		 $pname=$row_od["product_name"];
		 
		 $tot=($rate*$qnt);
		 $discount=$discount + $dic;
     $to=$to+$tot;
		 $total=$to-$discount;
		 $vat=($total*18)/100;
		 $gtotal=($total+$vat);		
		?>
    <tr>
      <td>&nbsp;<?php echo $slno; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
      <td>&nbsp;<?php echo $rate; ?></td>
      <td>&nbsp;<?php echo $qnt; ?></td>
      <td>&nbsp;<?php echo $tot; ?></td>
      
	<?php
	}
	 ?>
	<tr>
	  <td colspan="4"><div align="right"><b>Discount</b></div></td>
	  <td>&nbsp;<b><?php echo $discount; ?></b></td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <th colspan="4"><div align="right"><b>Total</b></div></th>
	  <th>&nbsp;<b><?php echo $total; ?><b></th>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
      <td colspan="4"><div align="right"><b>GST</b></div></td>
      <td>&nbsp;<b><?php echo $vat; ?></b></td>
      <td>&nbsp;</td>
    </tr>
        <tr>
      <th colspan="4"><div align="right"><b>Grand Total </b></div></th>
      <th>&nbsp;<b><?php echo $gtotal; ?><b></th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php include('footer.php');?>
			<?php include('val.php'); ?>
   
</body>
</html>
