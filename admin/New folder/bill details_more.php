
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
                                   <!--  <h1 class="main-title float-left">DEPARTMENT DETAILS</h1> -->
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
								<h3><i class="fa fa-hand-pointer-o"></i> DEPARTMENT DETAILS</h3>
								
							</div>
								
							<div class="card-body">
        <!--/. NAV TOP  -->
        		 <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
	   <div id="divToPrint" >
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Bill Master  <small>Details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
             <!--    <a href="products_form.php" class="btn btn-info btn">Add New Product </a> <hr> -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
						
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Hardware Bill Detailes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

					
			
	 
<?php    include('db_connection.php'); ?>
<?php

$bmid=$_REQUEST['bmid'];
$dat=$_REQUEST['dat'];
$cust_id=$_REQUEST['cust_id'];

?>


 <table class="table table-striped table-bordered table-hover" >
						<thead>
    <tr>
      <th width="53">Bill No 
			
        <input name="bmid" type="text" id="bmid" class="form-control" value="<?php echo $bmid;  ?>" size="5" readonly=""></th>
      <th width="53"><div align="right">Date 
            <input name="date" type="text" class="form-control" value="<?php echo $dat;?>">
      </div></th>
    </tr>
    <tr>
      <td><b> Distributor Details</b>
        
        
		  <?php
		  $sql="select * from  customer_details where cust_id='$cust_id'";
		$res=$conn->query($sql);
		$row=mysqli_fetch_array($res);
		?>
		
		<p>Customer Name : <b><?php echo $row['cust_name'];?></b></p>
		Customer Phone : <b><?php echo $row['cust_contact_no'];?></b>
		</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;  </p>
 <table class="table table-striped table-bordered table-hover" >
						<thead>
    <tr>
      <th>Sl NO</th>
      <th>Product Name </th>
      <th>Rate</th>
	    <th>Qnt</th>
  		<!-- <th>CGST</th>
	   <th>SGST</th>
	     <th>Total GST Tax</th> -->
    
      <th>Total</th>
    </tr>
	</thead>
	<?php
	$slno=1;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	$cgst=0;
	$totgst1=0;
	$tottg=0;

		$sql="select * from bill_details bd,product_details p where bd.product_id=p.product_id and bd.bill_master_id='$bmid' ";
		$res=$conn->query($sql);
		while($row=mysqli_fetch_array($res))
		{
		//$slno=slno+1;
		$bill_id=$row['bill_id'];
		$pid=$row['product_id'];
		
		 $qnt=$row['P_Quantity'];
		 $rate=$row['Rate'];
		 $dic=$row['Discount'];
		 $pgst=($qnt*$rate)/18;
		 
		$scgst=(pgst/2);
		 $totgst1=$totgst1+$pgst;
		$pname=$row['product_name'];
		 
		 $tot=($rate*$qnt);
		 $discount=$discount+$dic;
		 
		 
		
	
		$totgst=($rate*$pgst)/100;
		 $sctg=($totgst/2);
		 
		 
		 
		  $total=$total+$tot;
		  
		   $GST=14;
		   $GST_VAL=($total*$GST)/100;
		   
		   $SGST=($GST_VAL)/2;
		  
		  
		 $gtotal=($total+$GST_VAL)- $discount;		
		?>
    <tr>
      <td>&nbsp;<?php echo $slno++; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
      <td>&nbsp;<?php echo $rate; ?></td>
	   <td>&nbsp;<?php echo $qnt; ?></td>
       <td>&nbsp;<b><?php echo $tot; ?></b></td>
    </tr>
    
	<?php
	}
	?>
	<tr>
	  <th colspan="4"><div align="right"><b>Total</b></div></th>
	  <th>&nbsp;<b><?php echo $total;?><b></th>
	  </tr>
	<tr>
	  <td colspan="4"><div align="right"><b>Discount</b></div></td>
	  <td>&nbsp;<b><?php echo $discount; ?></b></td>
	  </tr>
	<tr>
      <td colspan="4"><div align="right"><b>SGST (9%) </b></div></td>
	  <td>&nbsp;<b><?php echo $SGST; ?></b></td>
	  </tr>
	<tr>
      <td colspan="4"><div align="right"><b>CGST (9%) </b></div></td>
	  <td>&nbsp;<b><?php echo $SGST; ?></b></td>
	  </tr>
	<tr>
      <td colspan="4"><div align="right"><b>Total GST (18%) </b></div></td>
      <td>&nbsp;<b><?php echo $GST_VAL; ?></b></td>
    </tr>
    <tr>
      <th colspan="4"><div align="right"><b>Grand Total </b></div></th>
      <th>&nbsp;<b><?php echo $gtotal; ?><b></th>
    </tr>
  </tbody>
                                </table>
								</b>
								
					
					
					
			</div>

            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<?php include('footer.php'); ?>

</div>


</body>
</html>>
