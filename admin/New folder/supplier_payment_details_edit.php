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
include('db_connection.php');
$supplier_payment_id=$_REQUEST['supplier_payment_id'];
$sql="select * from supplier_payment_details where supplier_payment_id='$supplier_payment_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="formID" id="formID" method="post" action="supplier_payment_update.php">
<input type="hidden" name="supplier_payment_id" value="<?php echo $row['supplier_payment_id']; ?>">
 <table width="621" height="368" border="1" align="center" bgcolor="#FFFFFF" class="style1">
    <tr>
      <td width="300">SUPPLIER ID :</td>
      <td width="305"><select name="s_id" id="s_id" class="validate[required,custom[onlyNumber]] form-control">
        <option value="">select supplier </option>
        <?php

	  $sql1="select * from supplier_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['supplier_id']; ?>" <?php if($row1['supplier_id']==$row['supplier_id']) { ?> selected <?php } ?> ><?php echo $row1['supplier_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>SUPPLIER PAYMENT AMOUNT: </td>
      <td><input name="s_pamt" type="text"  id="s_pamt" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['supplier_payment_amt'];?>"></td>
    </tr>
    <tr>
      <td>DESCRIPTION:</td>
      <td><input name="desc" type="text"  id="desc" class="validate[required,custom[onlyLetter]] form-control"value="<?php echo $row['description'];?>"></td>
    </tr>
    <tr>
      <td>PAYMENT DATE:</td>
      <td><?php					
      $date_default = "";
     
      
	  $dat=$row["payment_date"];
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
	  ?></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" class="btn btn-primary" id="submit" value="SUBMIT">
        <input name="reset" type="reset" class="btn btn-danger" id="reset" value="RESET">
      </div></td>
    </tr>
  </table>
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