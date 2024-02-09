<?php

 $type_ans=$_POST["type_ans"];
 $hintans=$_POST["hintans"];
 $pwd=$_POST["password"];
if($type_ans==$hintans)
{
?>
<script type="text/javascript">
alert("your password is: <?php echo $pwd ?>");
 
document.location="login.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("Wrong Hint Answer");
document.location="login.php";
</script>
<?php

}
?>