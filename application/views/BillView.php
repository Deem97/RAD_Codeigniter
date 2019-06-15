<!DOCTYPE html>
<html>
<head>
<title>Inventory</title>
</head>

<body>
<h1>Bill</h1>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Bill ID</th>
    <!-- <th>Customer ID</th> -->
    <th>Item ID</th>
    <th>Quantity</th>
  </tr>
  <?php
  foreach($data as $row){
  echo "<tr>
  <td>$row->bill_id</td>
  <td>$row->item_id</td>
  <td>$row->quantity</td>
  <td><a href='".site_url('BillController/editRecord/'.$row->bill_id)."'>Update </a>|
  <a href='".site_url('BillController/deleteRecord/'.$row->bill_id)."'> Delete</td>
  </tr>";
  }
   ?>
</table>

</body>
</html>