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
                           Supplier Payment Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Supplier Payment Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
<?php include ('cal.php');?> 
<?php
$s_id=$_POST['s_id'];
?>
<form name="form1" method="post" action="supplier_payment_insert.php" id="formID">
  <table width="1003" height="298" border="0" align="center" bgcolor="#FFFFFF" class="style1">
    <tr>
      <td width="300"><span class="style7">Supplier Name </span></td>
      <td width="300"><select name="s_id" id="s_id" class="validate[required,custom[onlyNumber]] form-control">
      
        <?php
	  include('db_connection.php');
	  $sql="select * from supplier_details where supplier_id='$s_id'";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
        <option value="<?php echo $row['supplier_id']; ?>"><?php echo $row['supplier_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
      <td width="300"><span class="style7">Payment Date</span></td>
      <td width="194"><span class="container">
        <?php					
      $date_default = "";
     
      
	  $dat=date('Y-m-d');
         $date_default =$dat;
      $year=date('Y')+10;
	  $syear=date('Y')+50;

	  $myCalendar = new tc_calendar("Payment_date", true, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))


            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$year-01-01");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>
      </span></td>
    </tr>
	
	<?php
	$p_amount=0;
	  $sql2="select * from product_purchase_details where supplier_id='$s_id'";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  $total=($row2['purchase_price']*$row2['pro_qty'])- $row2['discount'];
	$gst=($total*18)/100;
	$gtotal=$total+$gst;
	$tot=$tot+($row2['purchase_price']*$row2['pro_qty']);
	$gst_val=$gst_val+$gst;
	$sgst=$gst_val/2;
	$p_amount=$p_amount+($gst_val+$tot);
	
	  }
	  
	  
	   $sql3="select SUM(supplier_payment_amt) as spmt from supplier_payment_details where supplier_id='$s_id'";
	  $res3=mysqli_query($conn,$sql3);
	  $row3=mysqli_fetch_array($res3);
	 
	 $spmt=$row3['spmt'];
	 
	 $bal=($p_amount-$spmt);
	?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Purchase Amount </td>
      <td><?php echo $p_amount; ?>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Payment Amount </td>
      <td><?php echo $spmt;?>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Balance</td>
      <td><font color="#FF0000"><b><?php echo $bal; ?></b></font>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Supplier Payment Amount</td>
      <td>Description</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input name="s_pamt" type="text" id="s_pamt" class="validate[required,custom[onlyNumber]] form-control"></td>
      <td><input name="desc" type="text" id="desc" class="validate[required,custom[onlyLetter]] form-control"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
	<td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <input name="Submit" type="submit" class="btn btn-primary" id="submit" value="Submit">
        <input name="reset" type="submit" class="btn btn-danger" id="reset" value="Reset">
      </div></td>
    </tr>
  </table>
 
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
