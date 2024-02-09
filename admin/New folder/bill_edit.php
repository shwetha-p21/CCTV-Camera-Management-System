<!DOCTYPE html>
<html lang="en">
<head>
		<?php include("metadata.php"); ?>
		<?php include('header.php'); ?>
		<?php include('sidebar.php'); ?>
</head>

<body class="adminbody">


	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->

	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">


			<div class="row">
					<div class="col-xl-12">
							<div class="breadcrumb-holder">
                                   <!--  <h1 class="main-title float-left">EMPLOYEE SALARY DETAILS</h1> -->
                                    <!-- <ol class="breadcrumb float-right">
										<li class="breadcrumb-item">Home</li>
										<li class="breadcrumb-item active">Form validation</li>
                                    </ol> -->
                                    <div class="clearfix"></div>
                            </div>
					</div>
			</div>
            <!-- end row -->
			

			

			
			<div class="row">
			
                  <div class="col-xs-20 col-sm-20 col-md-10 col-lg-10 col-xl-10">					
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="fa fa-hand-pointer-o"></i>DISTRIBUTOR BILL DETAILS</h3>
								
							</div>
								
							<div class="card-body">
<?php
include('connection.php');
$D_B_ID=$_REQUEST['D_B_ID'];
$sql="select * from disributor_bill_details where D_B_ID='$D_B_ID'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1"  method="post" id="formID" action="bill_update.php">
<input type="hidden" name="D_B_ID" value="<?php echo $row['D_B_ID'];?>">
  <table width="377" border="0">
    
    <tr>
      <td width="222"><div align="center">Product ID</div></td>
      <td width="139"><select name="pid" id="pid" class="validate[required] form-control">
        <option value="">Select Product</option>
        <?php
	 
	  $sql1="select * from product_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['Prod_ID'];?>" <?php if ($row1['Prod_ID']==$row['Prod_ID']) { ?> selected <?php } ?>><?php echo $row1['Prod_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td><div align="center">Qunatity</div></td>
      <td><input name="qty" type="text" id="qty" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['Quantity'];?>"></td>
    </tr>
    <tr>
      <td><div align="center">Price</div></td>
      <td><input name="price" type="text" id="price" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['Price'];?>"></td>
    </tr>
    <tr>
      <td><div align="center">Discount</div></td>
      <td><input name="dis" type="text" id="dis" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['Discount'];?>"></td>
    </tr>
    <tr>
      <td><div align="center">GST</div></td>
      <td><input name="gst" type="text" id="gst" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['GST'];?>"></td>
    </tr>
    <tr>
      <td><div align="center">Tax</div></td>
      <td><input name="tax" type="text" id="tax" class="validate[required,custom[onlyNumber]] form-control" value="<?php echo $row['TAX'];?>"></td>
    </tr>
    <tr>
      <td><div align="center">Distributor bill master ID</div></td>
      <td><select name="dbid" id="dbid" class="validate[required,custom[onlyNumber]] form-control">
        <option value="">Select Bill</option>
        <?php
	  $sql1="select * from distributor_bill_master_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['D_M_ID']; ?>" <?php if($row1['D_M_ID']==$row['D_M_ID']) { ?> selected <?php } ?>><?php echo $row1['Date'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
</form>
</div>														
						</div><!-- end card-->					
                    </div>

							</div>														
						</div><!-- end card-->					
                    </div>
					
					
			</div>

            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<?php include('footer.php'); ?>

</div>
<!-- END main -->

<?php include('script.php'); ?>
<?php include('val.php'); ?>

</body>
</html>>

