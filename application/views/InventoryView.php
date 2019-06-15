<!DOCTYPE html>
<html>
<head>
<title>Inventory</title>
</head>

<body>
<h1>Inventory</h1>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>ID</th>
    <th>Name</th>
    <th>Quantity</th>
    <th>Price</th>
  </tr>
  <?php
  foreach($data as $row){
  echo "<tr>
  <td>$row->id</td>
  <td>$row->name</td>
  <td>$row->quantity</td>
  <td>$row->price</td>
  <td><a href='".site_url('InventoryController/editRecord/'.$row->id)."'>Update </a>|
  <a href='".site_url('InventoryController/deleteRecord/'.$row->id)."'> Delete</td>
  </tr>";
  }
   ?>
</table>
</form>
</body>
</html>