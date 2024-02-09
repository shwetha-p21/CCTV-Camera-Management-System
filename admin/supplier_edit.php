<?php
include('db_connection.php');
$supplier_id=$_REQUEST['supplier_id'];
$sql="select * from supplier_details where supplier_id='$supplier_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="supplier_update.php">
<input type="hidden" name="supplier_id" value="<?php echo $row['supplier_id']; ?>">
  <table width="570" height="552" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">SUPPLIER DETAILS </div></td>
    </tr>
    <tr>
      <td width="267">Supplier name </td>
      <td width="287"><input name="supp_name" type="text" id="supp_name" value="<?php echo $row['supplier_name'];?>"></td>
    </tr>
    <tr>
      <td>Supplier address </td>
      <td><input name="supp_address" type="text" id="supp_address" value="<?php echo $row['supplier_address'];?>"></td>
    </tr>
    <tr>
      <td>Supplier city </td>
      <td><input name="supp_city" type="text" id="supp_city" value="<?php echo $row['supplier_city'];?>"></td>
    </tr>
    <tr>
      <td>Contact no </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no'];?>"></td>
    </tr>
    <tr>
      <td>Email id </td>
      <td><input name="email_id" type="text" id="email_id" value="<?php echo $row['email_id'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" id="submit" value="SUBMIT">
        <input name="reset" type="submit" id="reset" value="RESET">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>

