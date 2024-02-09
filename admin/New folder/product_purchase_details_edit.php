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
                           Product Purchase Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Product Purchase Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
<?php include ('cal.php');?> 

<?php
include('db_connection.php');
$pro_purchase_id=$_REQUEST['pro_purchase_id'];
$sql="select * from product_purchase_details where pro_purchase_id='$pro_purchase_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="formID" id="formID" method="post" action="product_purchase_update.php">
<input type="hidden" name="pro_purchase_id" value="<?php echo $row['pro_purchase_id']; ?>">
  <table width="436" height="482" border="0" align="left">
    <tr>
      <td width="192">PRODUCT ID : </td>
      <td width="239"><select name="pro_id" id="pro_id" class="validate[required,custom[onlyNumber]]form-control">
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
      <td height="26">QUANTITY:</td>
      <td><input name="quantity" type="text" id="quantity" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['pro_qty'];?>"></td>
    </tr>
    <tr>
      <td>PURCHASE PRICE : </td>
      <td><input name="pur_price" type="text" id="pur_price" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['purchase_price'];?>"></td>
    </tr>
    <tr>
      <td>DISCOUNT:</td>
      <td><input name="discount" type="text" id="discount" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['discount'];?>"></td>
    </tr>
    <tr>
      <td>SUPPLIER ID : </td>
      <td><select name="s_id" id="s_id" class="validate[required,custom[onlyNumber]] form-control">
	  <option value="">select supplier </option>
        <?php

	  $sql2="select * from supplier_details";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
        <option value="<?php echo $row2['supplier_id']; ?>" <?php if($row2['supplier_id']==$row['supplier_id']) { ?> selected <?php } ?> ><?php echo $row2['supplier_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td height="45">PURCHASE DATE : </td>
      <td><input name="pur_date" type="date" id="pur_date" class="validate[required,custom[date]] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="Submit" type="submit"  class="btn btn-primary" id="submit" value="SUBMIT">
        <input name="reset" type="submit" class="btn btn-danger" id="reset" value="RESET">
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

