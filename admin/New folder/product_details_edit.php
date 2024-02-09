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
<?php
include('db_connection.php');
$product_id=$_REQUEST['product_id'];
$sql="select * from product_details where product_id='$product_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form action="product_details_update.php" method="post" enctype="multipart/form-data" name="formID" id="formID">
<input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
  <table width="641" height="387" border="0" align="left">
    <tr>
      <td width="221">PRODUCT NAME </td>
      <td width="168"><input name="pro_name" type="text" id="pro_name"  value="<?php echo $row['product_name'];?>"></td>
    </tr>
    <tr>
      <td>PRODUCT PRICE </td>
      <td><input name="pro_price" type="text" id="pro_price" class="validate[required,custom[onlyNumber]] form-control"value="<?php echo $row['product_price'];?>"></td>
    </tr> 
    </tr>
    <tr>
      <td>PRODUCT DESCRIPTION</td>
      <td><input name="pro_desc" type="text" id="pro_desc"  class="validate[required] form-control" value="<?php echo $row['product_description'];?>"></td>
    </tr>
    <tr>
      <tr>
      <td>PRODUCT MODEL</td>
      <td><input name="pro_mod" type="text" id="pro_mod"  class="validate[required] form-control" value="<?php echo $row['product_model'];?>"></td>
    </tr>
    <tr>
      <td rowspan="2">PRODUCT IMAGE </td>
       <td><img src="../img/<?php echo $row['product_image'];?>" width="75px" height="75px"></td>
    </tr>
    <tr>
      <td><input name="pro_image" type="file" id="pro_image"class="validate[required]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" class="btn btn-primary" id="submit" value="SUBMIT">
        <input name="reset" type="reset" class="btn btn-danger" id="reset" value="RESET">
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
