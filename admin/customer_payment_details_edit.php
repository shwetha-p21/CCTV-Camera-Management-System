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
                            Customer Payment Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Payment Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
<?php include ('cal.php');?>                       
<?php
include('db_connection.php');
$payment_id=$_REQUEST['payment_id'];
$sql="select * from customer_payment_details where payment_id='$payment_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="formID" id="formID" method="post" action="customer_payment_update.php">
<input type="hidden" name="payment_id" value="<?php echo $row['payment_id']; ?>">

  <table width="416" height="265" border="0" align="left">
    <tr>
      <td width="217">Csutomer Id</td>
      <td width="219"><select name="cust_id" id="cust_id" class="validate[required,custom[onlyNumber] form-control">
	  <option value="">select customer </option>
        <?php

	  $sql1="select * from customer_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['cust_id']; ?>" <?php if($row1['cust_id']==$row['cust_id']) { ?> selected <?php } ?> ><?php echo $row1['cust_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>Payment Amount </td>
      <td><input name="payment_amt" type="text" id="payment_amt" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['payment_amt'];?>"></td>
    </tr>

    <tr>
      <td height="45">Payment Date </td>
      <td><input name="payment_date" type="date" id="payment_date" class="validate[required,custom[date]] form-control"></td>
    </tr>
    
    <tr>
      <td>Description</td>
      <td><input name="desc" type="text" id="desc"  class="validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['description'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" id="submit" value="SUBMIT" class="btn btn-primary">        
        <input name="reset" type="reset" id="reset" value="RESET" class="btn btn-danger">
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

