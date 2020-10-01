<!DOCTYPE html>
<html>
<head>
<title>Input Drug</title>
</head>

<body>
  <form method="post" action="<?php echo site_url('BillController/editRecord'); ?>">
		<table width="600" border="1" cellspacing="5" cellpadding="5">

<?php
foreach($result as $row){
    echo "<tr>
            <td width='230'>Bill ID</td>
            <td width='329'><input type='text' name='id'  value='$row->bill_id' readonly='readonly' /></td>
        </tr>
    ";
    break;
}
?>
</table>

<table width="600" border="1" cellspacing="5" cellpadding="5">
        <tr>
            <td width='230'>Item ID</td>
	    <td width='230'>Item Name</td>
            <td width='329'>Quantity</td>
        </tr>


<?php
foreach($result as $row){

echo "      
  <tr>
    <td><input type='text' name='qty' value='$row->item_id'/></td>
    <td><input type='text' name='price' value='$row->quantity'/></td>
  </tr>";
}


echo "<td colspan='2' align='center'><input type='submit' name='update' value='Update Data'/></td>";
?>
</table>

	</form>
</body>
</html>
