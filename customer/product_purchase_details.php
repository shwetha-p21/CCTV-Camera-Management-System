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
<form name="form1" method="post" action="product_purchase_insert.php" id="formID">
  <table width="429" height="433" border="0" align="left">
    <tr>
      <td height="52">Supplier Name </td>
      <td><select name="s_id" id="s_id" class="validate[required,custom[onlyNumber]] form-control">
          <option value="">Select Supplier </option>
          <?php
	  include('db_connection.php');
	  $sql1="select * from supplier_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
          <option value="<?php echo $row1['supplier_id']; ?>"><?php echo $row1['supplier_name'];?></option>
          <?php
	 }
	 ?>
      </select></td>
    </tr>
    <tr>
      <td width="197">Product Name </td>
      <td width="352"><select name="pro_id" id="pro_id" class="validate[required,custom[onlyNumber]] form-control">
	   <option value="">Select Product </option>
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
      <td height="26">Quantity</td>
      <td><input name="quantity" type="text" id="quantity" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Purchase Price </td>
      <td><input name="pur_price" type="text" id="pur_price" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td height="64">Discount</td>
      <td><input name="discount" type="text" id="discount" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
<td height="48">Purchase Date </td>
      <td><span class="container">
        <?php					
      $date_default = "";
     
      
	  $dat=date('Y-m-d');
         $date_default =$dat;
      $year=date('Y')+10;
	  $syear=date('Y')+50;

	  $myCalendar = new tc_calendar("pur_date", true, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))


            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$year-01-01");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2015, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>
      </span></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="Submit" type="submit" class="btn btn-primary" value="Submit">
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
