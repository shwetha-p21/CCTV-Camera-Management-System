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
                           Order Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Order Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
<?php include ('cal.php');?>  

<form name="form1" method="post" action="order_insert.php" id="formID">
  <table width="353" height="315" border="0" align="left">
    <tr>
      <td width="138">Customer Id </td>
      <td width="205"><select name="cust_id" id="cust_id" class="validate[required,custom[onlyNumber]] form-control">
	  <option value="">select customer </option>
	  <?php
	  include('db_connection.php');
	  $sql="select * from customer_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['cust_id']; ?>"><?php echo $row['cust_name'];?></option>
	  
	  
	  <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>Product Id </td>
      <td><select name="product_id" id="product_id" class="validate[required,custom[onlyNumber]] form-control">
	  <option value="">select product </option>
	  <?php
	  include('db_connection.php');
	  $sql1="select * from product_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['product_id']; ?>"><?php echo $row1['product_name'];?></option>
	  
	  
	  <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="desc" type="text" id="desc" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
     <td height="41">Order Date </td>
      <td><span class="container">
        <tr>
<td height="48">Purchase Date </td>
   <td><input name="order_date" type="date" id="pur_date" class="validate[required,custom[date]] form-control">  </td>
    </tr>
      </span></td>
	  
	
    </tr>
    <tr>
      <td height="36" colspan="2"><div align="center">
        <input name="submit" type="submit" class="btn btn-primary" id="submit" value="SUBMIT">
        <input name="reset" type="submit" class="btn btn-danger" id="reset" value="RESET">
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
