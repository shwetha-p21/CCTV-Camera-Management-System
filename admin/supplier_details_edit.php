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
<?php
include('db_connection.php');
$supplier_id=$_REQUEST['supplier_id'];
$sql="select * from supplier_details where supplier_id='$supplier_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="formID" id="formID" method="post" action="supplier_update.php">
<input type="hidden" name="supplier_id" value="<?php echo $row['supplier_id']; ?>">
  <table width="570" height="552" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center"><h3><b>SUPPLIER DETAILS</b></h3> </div></td>
    </tr>
    <tr>

      <td width="267">&nbsp;&nbsp;&nbsp;Supplier name </td>
      <td width="287"><input name="supp_name" type="text" id="supp_name" class="validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['supplier_name'];?>"></td>
    </tr>
      <tr>
      <td>&nbsp;&nbsp;&nbsp;Supplier address </td>
      <td><input name="supp_address" type="text" id="supp_address" class="validate[required] form-control" value="<?php echo $row['supplier_address'];?>"></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Supplier city </td>
      <td><input name="supp_city" type="text" id="supp_city" class="validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['supplier_city'];?>"></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Contact no </td>
      <td><input name="contact_no" type="text" id="contact_no" class="validate[required,custom[mobile]] form-control" value="<?php echo $row['contact_no'];?>"></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Email id </td>
      <td><input name="email_id" type="text" readonly="" id="email_id" class="validate[required,custom[email]] form-control" value="<?php echo $row['email_id'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" class="btn btn-primary" id="submit" value="SUBMIT">
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
