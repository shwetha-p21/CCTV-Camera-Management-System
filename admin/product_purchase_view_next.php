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
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Product PurchaseDetails 
                       </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="product_purchase_details.php" class="btn btn-primary">ADD New</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Product Purchase Details 
                       </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<?php include('cal.php'); ?>
							<form name="form1" method="post" action="product_purchase_view_next.php">
			    <table width="968" border="0">
  <tr>
    <td width="139">From Date: </td>
    <td width="255"><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date1", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    <td width="161">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Date :
&nbsp;&nbsp;&nbsp;</td>
    <td width="350"><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date2", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>  </td>
    <td width="249"><input type="submit" name="Submit" class="btn btn-primary" value="SEARCH"></td>
  </tr>
</table>		  
			  </form>
			    <?php 
			  $date1=$_POST['date1'];
			  $date2=$_POST['date2'];
			   ?>
			  <h5>From Date : <font color="#003399"><?php echo $date1; ?> </font>&nbsp;&nbsp; To Date: <font color="#003399"><?php echo $date2?></font></h5>
     
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>

	<tr>
        <th >PUR ID</th>
		 <th >Supplier Name</th>
          <th>Product Name</th>
          <th>Pro Qty</th>
          <th >Purchase Price</th>
          <th >Discount</th>
		   <th >Sub Total</th>
		   <th >GST</th>
		     <th >Total</th>
     
      <th >Purchase Date</th>
      <th >Edit</th>
      <th>Delete</th>
   </tr>
	  </thead>
  <tbody>
	<?php
	$sn=1;
	$tot=0;
	$gst_val=0;
	$sgst=0;
	$gtotal=0;
	$dic=0;
	
	include('db_connection.php');
	$sql="select * from product_purchase_details ppd,product_details pd,supplier_details sd where ppd.product_id=pd.product_id and ppd.supplier_id=sd.supplier_id and ppd.purchase_date  between '$date1' and '$date2'";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	$total=($row['purchase_price']*$row['pro_qty'])- $row['discount'];
	$gst=($total*18)/100;
	$gtotal=$total+$gst;
	$tot=$tot+($row['purchase_price']*$row['pro_qty']);
	$gst_val=$gst_val+$gst;
	$sgst=$gst_val/2;
	$gtotal=$gtotal+($gst_val+$tot);
	$dic=$dic+$row['discount'];
	?>
	  <tr>
      <td><?php echo $sn++;?></td>
       <td><?php echo $row['supplier_name'];?></td>
      <td><?php echo $row['product_name'];?></td>
      <td><?php echo $row['pro_qty'];?></td>
      <td><?php echo $row['purchase_price'];?></td>
      <td><?php echo $row['discount'];?></td>
	  <td><?php echo $total;?></td>
	  <td><?php echo $gst;?></td>
	   <td><?php echo $gtotal;?></td>
     
      <td><?php echo $row['purchase_date'];?></td>
	  <td><a href="product_purchase_details_edit.php?pro_purchase_id=<?php echo $row['pro_purchase_id']; ?>" onClick="return confirm('Are you sure to edit');"><img src="../icon/edit.png" width="30" height="33"></a></td>
	  <td><a href="product_purchase_details_delete.php?pro_purchase_id=<?php echo $row['pro_purchase_id']; ?>" onClick="return confirm('Are you sure to delete');"><img src="../icon/delete.png" width="30" height="35"></a></td>
	  </tr>
	<?php
	}
	?>
 </tbody>
 
                              </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                <?php include('footer.php');?>
			    </div>
				
            </div>
                <!-- /. ROW  -->
            
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
             
			       </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>

