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
<form name="form1" method="post" action="supplier_payment_details.php" id="formID">
  <table width="510" height="176" border="0" align="center" bgcolor="#FFFFFF" class="style1">
    <tr>
      <td width="300"><span class="style7">Supplier Name </span></td>
      <td width="194"><select name="s_id" id="s_id" class="validate[required,custom[onlyNumber]] form-control">
	  <option value="">Select Supplier </option>
	  <?php
	  include('db_connection.php');
	  $sql="select * from supplier_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['supplier_id']; ?>"><?php echo $row['supplier_name'];?></option>
	  
	  
	  <?php
	   }
	   ?>
	 
	  
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="Submit" type="submit" class="btn btn-primary" id="submit" value="Submit">
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
