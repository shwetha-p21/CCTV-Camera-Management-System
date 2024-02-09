    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	   <a class="navbar-brand" href="index.php">SHUBHASHREE TECHNOLOGY</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li <?php if($about=='index') {?> class="nav-item active" <?php } else {  ?>class="nav-item" <?php } ?>><a href="index.php" class="nav-link pl-0" href="#hero-area">Home</a></li>
	        	<li <?php if($about=='about') {?> class="nav-item active" <?php } else {  ?>class="nav-item" <?php } ?>><a href="about.php" class="nav-link">About</a></li>
	        	<li <?php if($about=='product') {?> class="nav-item active" <?php } else {  ?>class="nav-item" <?php } ?>><a href="product.php" class="nav-link">Product</a></li>
	        	
	          <li <?php if($about=='contact') {?> class="nav-item active" <?php } else {  ?>class="nav-item" <?php } ?>><a href="contact.php" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="../login/login.php" class="nav-link">Login</a></li>
			   <li class="nav-item"><a href="../login/reg.php" class="nav-link">Register</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>