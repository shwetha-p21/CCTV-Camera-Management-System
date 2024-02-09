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
                            Customer Payment Details 
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="customer_payment_details.php" class="btn btn-primary">ADD New</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Payment Details 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
	<tr>
        <th >Payment Id</th>
          <th>Cust Name</th>
          <th >Payment Amt</th>
          <th>Payment Date</th>
          <th>Description</th>
      <th>Edit</th>
      <th>Delete</th>
     </tr>
	  </thead>
  <tbody>
	<?php
	$sn=1;
	$tot=0;
	include('db_connection.php');
	$sql="select * from customer_payment_details cpd,customer_details cd where cpd.cust_id=cd.cust_id";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	$tot=$tot+$row['payment_amt'];
	?>
      <tr>
      <td><?php echo $sn++;?></td>
      <td><?php echo $row['cust_name'];?></td>
      <td><?php echo $row['payment_amt'];?></td>
      <td><?php echo $row['payment_date'];?></td>
      <td><?php echo $row['description'];?></td>
	  <td><a href="customer_payment_details_edit.php?payment_id=<?php echo $row['payment_id']; ?>" onClick="return confirm('Are you sure to edit');"><img src="../icon/edit.png" width="30" height="33"></a></td>
      <td><a href="customer_payment_details_delete.php?payment_id=<?php echo $row['payment_id']; ?>" onClick="return confirm('Are you sure to delete');"><img src="../icon/delete.png" width="30" height="35"></a></td>
    </tr>
	<?php
	}
	?>
  </tbody>
  <tr>
        <th >&nbsp;</th>
          <th>Total Amount </th>
          <th ><?php echo $tot; ?>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
     </tr>
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

