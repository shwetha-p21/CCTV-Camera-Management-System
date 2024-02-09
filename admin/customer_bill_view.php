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
             <a href="customer_bill_details.php" class="btn btn-primary">ADD New</a>  
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Bill Details 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>

        <th width="156">Cust Bill Id</th>
          <th width="98">Cust Id</th>
          <th width="139">Product Id</th>
          <th width="139">Product Qty</th>
          <th width="104">Pro Price</th>
          <th width="145">Pro Discount</th>
          <th width="74">Date</th>
      <th width="79">Edit</th>
      <th width="99">Delete</th>
    </tr>
	  </thead>
  <tbody>
	<?php
	$sn=1;
	include('db_connection.php');
	$sql="select * from customer_bill_details cbd,customer_details cd,product_details pd where cbd.cust_id=cd.cust_id and cbd.product_id=pd.product_id";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td><?php echo $sn++;?></td>
      <td><?php echo $row['cust_id'];?></td>
      <td><?php echo $row['product_id'];?></td>
      <td><?php echo $row['product_qty'];?></td>
      <td><?php echo $row['pro_price'];?></td>
      <td><?php echo $row['pro_discount'];?></td>
      <td><?php echo $row['date'];?></td>
	  <td><a href="customer_bill_details_edit.php?cust_bill_id=<?php echo $row['cust_bill_id']; ?>" onClick="return confirm('Are you sure to edit');"><img src="../icon/edit.png" width="30" height="33"></a></td>
	  <td><a href="customer_bill_details_delete.php?cust_bill_id=<?php echo $row['cust_bill_id']; ?>" onClick="return confirm('Are you sure to delete');"><img src="../icon/delete.png" width="30" height="35"></a></td>
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
