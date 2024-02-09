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
                           Product Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
<?php include ('cal.php');?> 
<form action="product_insert.php" enctype="multipart/form-data" method="post" id="formID" >
  <table width="464" height="255" border="0" align="left">
    <tr>
      <td width="194">Product Name </td>
      <td width="254"><input name="pro_name" type="text" id="pro_name" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td height="52">Product Price</td>
      <td><input name="pro_price" type="text" id="pro_price" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td height="46">Product Description </td>
      <td><input name="pro_desc" type="text" id="pro_desc" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td height="37">Product Image </td>
      <td><input name="pro_image" type="file" id="pro_image" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td height="46" colspan="2"><div align="center">
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
