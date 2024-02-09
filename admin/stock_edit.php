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
<?php
include('db_connection.php');
$stock_id=$_REQUEST['stock_id'];
$sql="select * from stock_details where stock_id='$stock_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="formID" id="formID" method="post" action="stock_update.php">
<input type="hidden" name="stock_id" value="<?php echo $row['stock_id'];?>">
  <table width="376" height="202" border="1" align="center" id="sk_id">
    <tr>
      <td height="53" colspan="2"><div align="center">STOCK DETAILS </div></td>
    </tr>
    <tr>
      <td width="177">PRODUCT ID </td>
      <td width="96"><select name="pro_id" id="pro_id" class="validate[required,custom[onlyNumber]] form-control">
	  <option value="">select product </option>
        <?php

	  $sql1="select * from product_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['product_id']; ?>" <?php if($row1['product_id']==$row['product_id']) { ?> selected <?php } ?> ><?php echo $row1['product_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td><p>STOCK</p>
      </td>
      <td><input name="stock" type="text" id="stock" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['stock'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" class="btn btn-primary" id="submit" value="Submit">
        <input name="reset" type="reset" class="btn btn-danger" id="reset" value="Reset">
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

