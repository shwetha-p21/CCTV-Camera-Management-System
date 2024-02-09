<?php 
 session_start();
 if(!isset($_SESSION['uname'])){
 			?>
	<script>
		 alert("Session Expired");
		 document.location="login.php";
	</script>
	<?php
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>CCTV Management</title>


  
 
	<link href="style1.css" rel="stylesheet" />
</head>
<body>

<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Namaste customer <?php echo $_SESSION['uname']; ?> </h1>
		<div class="header-main">
		
		 <div class="header-left-bottom">

	 <form action="logout.php" method="post">
		<div class="bottom">
								<button type="submit" name="submit2" class="btn">LOGOUT</button>
				</div>
			</form>
		</div>
		
	</div>
</div>	
</div>

</body>
</html>