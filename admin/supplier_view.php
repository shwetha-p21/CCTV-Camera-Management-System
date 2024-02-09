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
                           Supplier Details 
                       </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="supplier_details.php" class="btn btn-primary">ADD NEW</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Supplier Details 
                       </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="1141" height="103" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
	
      <th width="80">Supplier Id </th>
        <th width="156">Supplier Name </th>
        <th width="189">Supplier Address </th>
        <th width="149">Supplier City </th>
        <th width="100">Contact No </th>
        <th width="123">Email Id </th>
        <th width="123">Balance </th>
        <th width="93">Edit</th>
    <th width="127">Delete</th>
  </tr>
	  </thead>
  <tbody>
  <?php
  $sn=1;
	include('db_connection.php');
	$sql="select * from supplier_details";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
	<td><?php echo $sn++;?></td>
	<td><?php echo $row['supplier_name'];?></td>
	<td><?php echo $row['supplier_address'];?></td>
	<td><?php echo $row['supplier_city'];?></td>
	<td><?php echo $row['contact_no'];?></td>
	<td><?php echo $row['email_id'];?></td>
    <td><?php echo $row['sup_bal'];?></td>
    <td><a href="supplier_details_edit.php?supplier_id=<?php echo $row['supplier_id']; ?>" onClick="return confirm('Are you sure to edit');"><img src="../icon/edit.png" width="30" height="33"></a></td>
    <td><a href="supplier_details_delete.php?supplier_id=<?php echo $row['supplier_id']; ?>" onClick="return confirm('Are you sure to delete');"><img src="../icon/delete.png" width="30" height="35"></a></td>
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

