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
                           Supplier Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Supplier Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
<?php include ('cal.php');?> 
<form name="form1" method="post" action="supply_insert.php"  id="formID">
  <table width="435" height="458" border="0" align="left">
    <tr>
      <td width="164">Supplier Name </td>
      <td width="255"><input name="supp_name" type="text" id="supp_name " class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td height="71">Supplier Address </td>
      <td><textarea name="supp_address" class="validate[required] form-control" id="supp_address"></textarea></td>
    </tr>
    <tr>
      <td>Supplier City </td>
      <td><input name="supp_city" type="text" id="supp_city" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contact_no" type="text" id="contact_no" class="validate[required,custom[mobile]] form-control"></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="email_id" type="text" id="email_id" class="validate[required,custom[email]] form-control"></td>
    </tr>
    <tr>
    
      <td name="sup_bal"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" class="btn btn-primary" id="submit" value="Submit">
        <input name="reset" type="reset" class="btn btn-danger" id="reset" value="Reset">
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
