<?php $about="product"; ?><!DOCTYPE html>
<html lang="en">
<?php include('metatag.php'); ?>
  <body>

<?php include('menu.php'); ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg12.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Product</h1>
            
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
				
				<?php
	$sn=1;
	include('db_connection.php');
	$sql="select * from product_details";
	$res=$conn->query($sql);	while($row=mysqli_fetch_array($res))

	{
	?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(../img/<?php echo $row['product_image'];?>);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3><?php echo $row['product_name'];?></h3>
								<h2 class="position mb-2">Rs. <?php echo $row['product_price'];?></h2>
								<h4 class="position mb-2"><?php echo $row['product_model'];?></h4>
								<div class="faded">
									<p><?php echo $row['product_description'];?></p>
									
	              </div>
							</div>
						</div>
					</div>
					
					<?php
	}
	?>
					
					
				</div>
			</div>
		</section>

		
<?php include('footer.php'); ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<?php include('script.php'); ?>
<?php include('bottom.php'); ?>    
  </body>
</html>
