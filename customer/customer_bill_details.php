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

<form name="form1" method="post" action="customer_bill_insert.php" id="formID">
  <table width="453" height="379" border="0" align="center">
    <tr>
      <td width="220">Customer</td>
      <td width="217"><select name="cust_id" id="cust_id" class="validate[required,custom[onlyNumber]] form-control">
	  <option value="">Select Customer </option>
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
      <td>Product</td>
      <td><select name="pro_id" id="pro_id" class="validate[required,custom[onlyNumber]] form-control">
	  <option value="">select product</option>
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
      <td><input name="quantity" type="text" id="quantity"class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><input name="price" type="text" id="price"class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Discount</td>
      <td><input name="discount" type="text" id="discount"class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
  <td><span class="style7">Date</span></td>
      <td><span class="container">
        <?php					
      $date_default = "";
     
      
	  $dat=date('Y-m-d');
         $date_default =$dat;
      $year=date('Y')+10;
	  $syear=date('Y')+50;

	  $myCalendar = new tc_calendar("date", true, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))


            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$year-01-01");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>
      </span></td>
	  
	
	  
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" class="btn btn-primary" id="submit"  value="SUBMIT">
        <input name="reset" type="submit" class="btn btn-danger" id="reset"  value="RESET">
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
