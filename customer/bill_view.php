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
                            Customer Bill Details 
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Bill Details 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
									<table id="example1" class="table table-bordered table-hover display">
										<thead>

											<tr>
    <th width="198">Sl No </th>
    <th width="191">Customer Name </th>
    <th width="143">Date</th>
	<th width="143">Payment Status</th>

    <th width="91">More Details</th>
    
  </tr>
  </thead>
  <tbody>
  <?php
  $dbid=1;
  include('db_connection.php');
  $uname=$_SESSION['uname'];
  $sql="select * from bill_master_details db, customer_details cd where db.cust_id=cd.cust_id and cd.cust_email_id='$uname'";
  $res=$conn->query($sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  
  <tr>
    <td><?php echo $dbid++;?></td>
    <td><?php echo $row['cust_name'];?></td>
    <td><?php echo $row['Date'];?></td>
	 <td><b><?php echo $row['P_Status'];?></b></td>

	<td><a href="bill details_more.php?bmid=<?php echo $row['bill_master_id'];?>&cust_id=<?php echo $row['cust_id']; ?>&dat=<?php echo $row['Date']; ?>" class="btn btn-warning">More Details</a></td>
   
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

