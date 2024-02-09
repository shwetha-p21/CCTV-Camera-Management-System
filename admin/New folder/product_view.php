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
                           Product Details 
                       </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
             <a href="product_details.php" class="btn btn-primary">ADD New</a>  
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product Details 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
        <th width="115">Product Id</th>
          <th width="152">Product Name</th>
          <th width="144">Product Price</th>
          <th width="210">Product Description</th>
          <th width="155">Product Model</th>
          <th width="155">Product Image</th>
          <th width="82">Edit</th>
      <th width="69">Delete</th>
   </tr>
	  </thead>
  <tbody>
	<?php
	$sn=1;
	include('db_connection.php');
	$sql="select * from product_details";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td><?php echo $sn++;?></td>
      <td><?php echo $row['product_name'];?></td>
	  <td><?php echo $row['product_price'];?></td>
	  <td><?php echo $row['product_description'];?></td>
      <td><?php echo $row['product_model'];?></td>
	  <td><img src="../img/<?php echo $row['product_image'];?>" width="75px" height="75px"></td>
	  <td><a href="product_details_edit.php?product_id=<?php echo $row['product_id']; ?>" onClick="return confirm('Are you sure to edit');"><img src="../icon/edit.png" width="30" height="33"></a></td>
	 <td><a href="product_details_delete.php?product_id=<?php echo $row['product_id']; ?>" onClick="return confirm('Are you sure to delete');"><img src="../icon/delete.png" width="30" height="35"></a></td>
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
