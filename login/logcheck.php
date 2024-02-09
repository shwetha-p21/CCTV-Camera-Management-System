

<?php
session_start();
?>
<?php
include 'db_connection.php';
?>
<?php 
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$address = mysqli_real_escape_string($con,$_POST['address']); 
	$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$hint_q = mysqli_real_escape_string($con,$_POST['hint_q']);
	$hint_a = mysqli_real_escape_string($con,$_POST['hint_a']);
	$password = mysqli_real_escape_string($con,$_POST['password']);

   $emailcheck = " select * from register where email='$email' "; 
   $query = mysqli_query($con,$emailcheck);

   $emailcount = mysqli_num_rows($query);

   if($emailcount>0){
   	?>
	<script>
		 alert("email already exists");
		 document.location="reg.php";
	</script>
	<?php
   }else{
   	    $insertquery = "insert into register values (null,'$name','$address','$mobile','$email','$password','$hint_q','$hint_a','customer')" ;
   	    $insert_cust="insert into customer_details values (null,'$name','$address','$mobile','$email')";
   	    $cut=mysqli_query($con,$insert_cust);

   	    $iquery = mysqli_query($con,$insertquery);

   	    if($iquery){
   	    	if($con){
	?>
	<script>
		 alert("Sign up successful");
		 document.location="login.php";
	</script>
	<?php
}else{
?>
	<script>
	 alert(" Sign up failed");
	</script>
	<?php
   	    }

   }

}
}

   if(isset($_POST['submit1'])){
   		
   		$email1 = $_POST['username1'];
      $password1 = $_POST['password1'];
     
      $email_check = "select * from register where email = '$email1' ";
      $query1 = mysqli_query($con,$email_check);
      
      $email_count = mysqli_num_rows($query1);
   
      if($email_count == 1){
          $email_fetch_name = mysqli_fetch_assoc($query1);
          $pa = $email_fetch_name['password'];
      	$_SESSION['uname']=$email_fetch_name['email'];
      	$type=$email_fetch_name['type'];
      	if($type=='admin'){
      	if($password1 == $email_fetch_name['password']){

          	  ?>
	         <script>
		        alert("Login successful");
		       document.location="../admin/home.php";
            	</script>
	        <?php
             }

            else{
          	  ?>
            
	         <script>
		        alert("Incorret password");
		       document.location="login.php";
            	</script>
	        <?php
            }
         }
         if($type=='customer'){


      	if($password1 == $email_fetch_name['password']){

          	  ?>
	         <script>
		        alert("Login successful");
		       document.location="../customer/home.php";
            	</script>
	        <?php
             }

            else{
          	  ?>
            
	         <script>
		        alert("Incorret password");
		       document.location="login.php";
            	</script>
	        <?php
            }
         }

      	}else{
      			?>
	<script>
		 alert("Incorret email");
		 document.location="login.php";
	</script>
	<?php
      	}

      
     
   }

?>