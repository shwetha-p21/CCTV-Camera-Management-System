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
                            Customer  Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer  Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
                                   
<?php include ('cal.php');?>
<?php
include('db_connection.php');
$cust_id=$_REQUEST['cust_id'];
$sql="select * from customer_details where cust_id='$cust_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="formID" id="formID" method="post" action="customer_update.php">
<input type="hidden" name="cust_id" value="<?php echo $row['cust_id']; ?>">
  <table width="482" height="315" border="0" align="left" class="style1">
    <tr>
      <td width="260" height="32">Customer Name: </td>
      <td width="168"><input name="cust_name" type="text" id="cust_name" class="validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['cust_name'];?>"></td>
    </tr>
    <tr>
      <td>Customer Address: </td>
      <td><input name="cust_address" type="text" id="cust_address" class="validate[required] form-control" value="<?php echo $row['cust_address'];?>"></td>
    </tr>
    <tr>
      <td>Customer City: </td>
      <td><input name="cust_city" type="text" id="cust_city" class="validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['cust_city'];?>"></td>
    </tr>
    <tr>
      <td>Customer Contact number:</td>
      <td><input name="cust_contact_no" type="text" id="cust_contact_no" class="validate[required,custom[mobile]] form-control" value="<?php echo $row['cust_contact_no'];?>"></td>
    </tr>
    <tr>
      <td>Customer Email Id: </td>
      <td><input name="cust_email_id" type="text" id="cust_email_id" class="validate[required,custom[email]] form-control" value="<?php echo $row['cust_email_id'];?>"></td>
    </tr>
    <tr>
      <td height="77" colspan="2"><div align="center">
        <input name="Submit" type="submit" class="btn btn-primary" value="SUBMIT">
        <input name="reset" type="submit" class="btn btn-danger" id="reset" value="RESET">
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
