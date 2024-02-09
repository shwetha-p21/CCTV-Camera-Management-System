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
                           Order Details 
                       </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
             <a href="order_details.php" class="btn btn-primary">ADD NEW ORDER</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Order Details 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
        <th width="138">Order id</th>
          <th width="138">Customer Name</th>
          <th width="138">Product Name</th>
          <th width="138">Quantity</th>
      <th width="138">Description</th>
	  <th width="138">Order Status</th>
      <th width="172">Order Date</th>
     
      <th width="138">Cancel</th>
    </tr>
	  </thead>
  <tbody>
<?php
	$sn=1;
	include('db_connection.php');
	$uname=$_SESSION['uname'];
	$sql="select * from order_details od,customer_details cd,product_details pd where od.cust_id=cd.cust_id and od.pro_id=pd.product_id and cd.cust_email_id='$uname'";

	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
	  <td><?php echo $sn++;?></td>
	  <td><?php echo $row['cust_name'];?></td>
      <td><?php echo $row['product_name'];?></td>
	  <td><?php echo $row['order_qty'];?></td>
      <td><?php echo $row['description'];?></td>
	  <td><?php echo $row['order_status'];?></td>
      <td><?php echo $row['order_date'];?></td>
	     

      <td><a href="order_details_delete.php?order_id=<?php echo $row['order_id']; ?>" onClick="return confirm('Are you sure to delete');">Cancel</a></td>
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
