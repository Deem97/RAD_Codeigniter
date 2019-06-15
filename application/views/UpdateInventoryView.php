<!DOCTYPE html>
<html>
<head>
<title>Input Drug</title>
</head>

<body>
  <form method="post" action="<?php echo site_url('InventoryController/editRecord'); ?>">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
    
<?php
foreach($result as $row)

echo "      
  <tr>
    <td width='230'>ID</td>
    <td width='329'><input type='text' name='id'  value='$row->id' readonly='readonly' /></td>
  </tr>  
  <tr>
    <td width='230'>Name </td>
    <td width='329'><input type='text' name='name' value='$row->name'/></td>
  </tr>
  <tr>
    <td>Quantity </td>
    <td><input type='text' name='qty' value='$row->quantity'/></td>
  </tr>
  <tr>
    <td>Price </td>
    <td><input type='text' name='price' value='$row->price'/></td>
  </tr>
  <tr>
    <td colspan='2' align='center'><input type='submit' name='update' value='Update Data'/></td>
  </tr> ";
?>
</table>

	</form>
</body>
</html>