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

<form name="form1" method="post" action="customer_insert.php" id="formID">
  <table width="622" height="430" border="0" class="style1">
    <tr>
      <td width="325" height="32">Customer Name </td>
      <td width="287"><input name="cust_name" type="text" id="cust_name"class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Customer Address </td>
      <td><textarea name="cust_address" class="validate[required] form-control" id="cust_address"></textarea></td>
    </tr>
    <tr>
      <td>Customer city </td>
      <td><input name="cust_city" type="text" id="cust_city"class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Customer contact number </td>
      <td><input name="cust_contact_no" type="text" id="cust_contact_no" class="validate[required,custom[mobile]] form-control"></td>
    </tr>
    <tr>
      <td>Customer email id </td>
      <td><input name="cust_email_id" type="text" id="cust_email_id"class="validate[required,custom[email]] form-control"></td>
	  </tr>
    <tr>
      <td height="77" colspan="2"><div align="center">
        <input name="submit" type="submit" class="btn btn-primary"  id="submit" value="Submit">
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
