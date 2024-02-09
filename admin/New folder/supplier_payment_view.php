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
                           Supplier Payment Details 
                       </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="supplier_payment.php" class="btn btn-primary">ADD New</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Supplier Payment Details 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
      <td width="203">SP Id</td>
        <td width="111">Supplier Name</td>
        <td width="223">Supplier Payment Amt</td>
        <td width="107">Description</td>
    <td width="134">Payment Date</td>
    <td width="37">Edit</td>
    <td width="115">Delete</td>
 </tr>
	  </thead>
  <tbody>
  <?php
  $sn=1;
  include('db_connection.php');
  $sql="select * from supplier_payment_details spd,supplier_details sd where spd.supplier_id=sd.supplier_id";
  $res=$conn->query($sql);
  while($row=mysqli_fetch_array($res))
  {
 ?>
  <tr>
  <td><?php echo $sn++;?></td>
  <td><?php echo $row['supplier_name'];?></td>
  <td><?php echo $row['supplier_payment_amt'];?></td>
  <td><?php echo $row['description'];?></td>
  <td><?php echo $row['payment_date'];?></td>
  <td><a href="supplier_payment_details_edit.php?supplier_payment_id=<?php echo $row['supplier_payment_id'];?>" onClick="return confirm('Are you sure to edit');"><img src="../icon/edit.png" width="30" height="33"></a></td>
  <td><a href="supplier_payment_delete.php?supplier_payment_id=<?php echo $row['supplier_payment_id'];?>" onClick="return confirm('Are you sure to delete');"><img src="../icon/delete.png" width="30" height="35"></a></td>
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


