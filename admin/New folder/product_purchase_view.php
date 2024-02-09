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
			    		  
			  </form>
     
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
	$sql="select * from product_purchase_details ppd,product_details pd,supplier_details sd where ppd.product_id=pd.product_id and ppd.supplier_id=sd.supplier_id";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	$total=($row['purchase_price']*$row['pro_qty'])- $row['discount'];
	$gst=($total*18)/100;
	$gtotal=$total+$gst;
	
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

