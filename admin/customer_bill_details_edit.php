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
                            Customer Bill Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Bill Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
                                   
<?php include ('cal.php');?>
<?php
include('db_connection.php');
$cust_bill_id=$_REQUEST['cust_bill_id'];
$sql="select * from customer_bill_details where cust_bill_id='$cust_bill_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="formID" id="formID" method="post" action="customer_bill_update.php">
<input type="hidden" name="cust_bill_id" value="<?php echo $row['cust_bill_id']; ?>">
  <table width="453" height="379" border="0" align="left">
    <tr>
      <td width="220">CUSTOMER ID </td>
      <td width="217"><select name="cust_id" id="cust_id" class="validate[required,custom[onlyNumber]] form-control">
	  <option value="">select customer </option>
        <?php

	  $sql1="select * from customer_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['cust_id']; ?>" <?php if($row1['cust_id']==$row['cust_id']) { ?> selected <?php } ?> ><?php echo $row1['cust_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>PRODUCT ID</td>
      <td><select name="pro_id" id="pro_id" class="validate[required,custom[onlyNumber]] form-control">
        <option value="">select product</option>
        <?php
	  
	  $sql2="select * from product_details";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
        <option value="<?php echo $row2['product_id']; ?>" <?php if($row1['product_id']==$row['product_id']){ ?> selected <?php } ?>><?php echo $row2['product_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>QUANTITY</td>
      <td><input name="quantity" type="text" id="quantity" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['product_qty'];?>"></td>
    </tr>
    <tr>
      <td>PRICE</td>
      <td><input name="price" type="text" id="price" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['pro_price'];?>"></td>
    </tr>
    <tr>
      <td>DISCOUNT</td>
      <td><input name="discount" type="text" id="discount" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['pro_discount'];?>"></td>
    </tr>
    <tr>
      <td height="30">DATE</td>
      <td><input name="date" type="text" id="date" value="<?php echo $row['date'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit"  value="SUBMIT" class="btn btn-primary">
        <input name="reset" type="submit"   value="RESET"class="btn btn-danger" >
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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
