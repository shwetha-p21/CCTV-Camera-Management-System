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
                            Customer Details 
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="customer_details.php" class="btn btn-primary">ADD New</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Details 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
	
        <th width="83">Cust Id</th>
          <th width="119">Cust Name</th>
          <th width="140">Cust Address</th>
      <th width="99">Cust City</th>
      <th width="182">Cust Contact No</th>
      <th width="154">Cust Email Id</th>
	  <th width="73">Edit</th>
      <th width="103">Delete</th>
   </tr>
	  </thead>
  <tbody>
	<?php
	$sn=1;
	include('db_connection.php');
	$sql="select * from customer_details";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td><?php echo $sn++;?></td>
      
      <td><?php echo $row['cust_name'];?></td>
      <td><?php echo $row['cust_address'];?></td>
      <td><?php echo $row['cust_city'];?></td>
      <td><?php echo $row['cust_contact_no'];?></td>
      <td><?php echo $row['cust_email_id'];?></td>
	  <td><a href="customer_details_edit.php?cust_id=<?php echo $row['cust_id']; ?>" onClick="return confirm('Are you sure to edit');"><img src="../icon/edit.png" width="30" height="33"></a></td>
	  <td><a href="customer_details_delete.php?cust_id=<?php echo $row['cust_id']; ?>" onClick="return confirm('Are you sure to delete');"><img src="../icon/delete.png" width="30" height="35"></a></td>
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

