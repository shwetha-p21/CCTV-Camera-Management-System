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
                           Stock Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Stock Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
<?php include ('cal.php');?>

<form name="form1" method="post" action="stock_insert.php" id="formID">
  <table width="336" height="202" border="0" align="left" id="sk_id">
    <tr>
      <td width="113">Product Id </td>
      <td width="213"><select name="pro_id" id="pro_id" class="validate[required,custom[onlyNumber]] form-control">
	  <option value="">select product </option>
	  <?php
	  include('db_connection.php');
	  $sql="select * from product_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['product_id']; ?>"><?php echo $row['product_name'];?></option>
	  
	  
	  <?php
	   }
	   ?>
	 
	  
      </select></td>
    </tr>
    <tr>
      <td><p>Stock</p>
      </td>
      <td><input name="stock" type="text" id="stock" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" class="btn btn-primary" id="submit" value="Submit">
        <input name="reset" type="submit" class="btn btn-danger" id="reset" value="Reset">
      </div></td>
    </tr>
  </table>
    <div align="center"></div>
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

