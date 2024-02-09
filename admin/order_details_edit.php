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
<?php
include('db_connection.php');
$order_id=$_REQUEST['order_id'];
$sql="select * from order_details where order_id='$order_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="formID" id="formID" method="post" action="order_update.php">
<input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">

  <table width="371" height="333" border="0" align="left">
    <tr>
      <td width="173">Customer Id </td>
      <td width="182"><select name="cust_id" id="cust_id" class="validate[required,custom[onlyNumber]] form-control">
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
      <td>Product Id </td>
      <td><select name="product_id" id="product_id" class="validate[required,custom[onlyNumber]] form-control">
	 <option value="">select product </option>
        <?php

	  $sql2="select * from product_details";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
        <option value="<?php echo $row2['product_id']; ?>" <?php if($row2['product_id']==$row['pro_id']) { ?> selected <?php } ?> ><?php echo $row2['product_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['order_qty'];?>"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="desc" type="text" id="desc" class="validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['description'];?>"></td>
    </tr>
    <tr>
      <td>Order Date </td>
      <td><?php					
      $date_default = "";
     
      
	  $dat=$row["order_date"];
         $date_default =$dat;
      $year=date('Y')+10;
	  $syear=date('Y')+50;

	  $myCalendar = new tc_calendar("order_date", true, true);
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
	  ?></td>
    </tr>
    <tr>
      <td height="36" colspan="2"><div align="center">
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
