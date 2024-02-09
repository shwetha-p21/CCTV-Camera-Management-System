

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang= "en"> <!--<![endif]-->
<head><title>Forgot Password</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

		 	<link href="style2.css" rel="stylesheet" type="text/css" media="all" />
		
</head>
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<body>
  <section class="container">
    <div class="w3layouts-main">
    	<div class="bg-layer">
    		<h1>Please Enter Your Hint Answer.</h1>
	<?php
include('db_connection.php');
$uname=$_REQUEST['username'];
$sql="select * from register where name='$uname'";
//echo $sql;
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
    $hintqtn=$row["Hint_q"];
	$hintans=$row["Hint_ans"];
	$pwd=$row["password"];
?>
      <div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
		
					<div class="header-left-bottom">	
					<h3 class="alert alert-info">
						Hint Question: <?php echo " ".$hintqtn; ?>
					</h3>

					<form class="form-horizontal" action="getpwd.php" method="post">
						<fieldset>
							
						<div class="icon1">
								<input name="type_ans" type="text" class="input-large span10" id="username" size="10" autofocus  />
                                <input name="hintans" type="hidden" id="hintans" value="<?php echo $hintans; ?>">    

				
					                          
                          <input name="password" type="hidden" id="password" value="<?php echo $pwd; ?>">
</div>
							
							<div class="clearfix"></div>

						
							<div class="clearfix"></div>

							<div class="bottom">

							<button type="submit" class="btn btn-primary">Get Password</button>

							</div>
							<b>
							</b>
							<b>
							</b>
							<div class="links">
						
						<p class="right"><a href="forgot_password.php">Back</a></p>
						<div class="clear"></div>
					</div>
						</fieldset>
					</form>
				</div>
       </div>
     </div>
     </div>
</body>
</html>
<?php	
	
}
else
{
?>

<script type="text/javascript">
alert("Wrong Username");
 document.location="forgot_password.php";
//document.location="login.php";
</script>
<?php
}
?>

