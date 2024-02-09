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
                            Customer Payment Details </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Payment Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
<?php include ('cal.php');?>                                  
<form name="form1" method="post" action="customer_payment_insert.php" id="formID">
  <table width="527" height="438" border="0" align="left">
    <tr>
      <td width="270">Customer </td>
      <td width="247"><select name="cust_id" id="cust_id" class="validate[required,custom[onlyNumber]] form-control">
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
      <td>Payment Amount </td>
      <td><input name="payment_amt" type="text" id="payment_amt" class="validate[required,custom[onlyNumber]] form-control">
    </tr>
    <tr>
      <td><span class="style7">Payment Date</span></td>
      <td><span class="container">
        <?php					
      $date_default = "";
     
      
	  $dat=date('Y-m-d');
         $date_default =$dat;
      $year=date('Y')+10;
	  $syear=date('Y')+50;

	  $myCalendar = new tc_calendar("payment_date", true, true);
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
      <td>Description</td>
      <td><input name="desc" type="text" id="desc" class="validate[required,custom[onlyLetter]] form-control">
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
