<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>login</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

		 	<link href="style2.css" rel="stylesheet" type="text/css" media="all" />
		
</head>
<body>
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Login</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="logcheck.php" method="post">
					<div class="icon1">
						<input name="username1" type="email" id="username" placeholder="Email Address" required=""/>
					</div>
					
					<div class="icon1">
						<input name="password1" type="password" id="password" placeholder="Password" required=""/>
					</div>
					<div class="bottom">
						<button type="submit" name="submit1" class="btn">Login</button>
					</div>
					<div class="links">
						<p><a href="reg.php">New User? </a></p> 
						<p><a href="forgot_password.php">Forgot Password?</a></p>
						<div class="clear"></div>
					</div>
					<div class="links">
						
						<p class="right"><a href="../home/index.php">Home</a></p>
						<div class="clear"></div>
					</div>
			  </form>	
			</div>
			
		</div>
		
		 
	</div>
</div>	
</body>
</html>