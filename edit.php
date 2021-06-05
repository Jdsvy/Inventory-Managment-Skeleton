<?php

$db = mysqli_connect('localhost', 'root', '', 'EzMates');

if (isset($_POST['submit']))
{
$item_number=mysqli_real_escape_string($db, $_POST['item_number']);
$item_description=mysqli_real_escape_string($db, $_POST['item_description']);
$item_price=mysqli_real_escape_string($db, $_POST['item_price']);
$Item_Availability=mysqli_real_escape_string($db, $_POST['Item_Availability']);

mysqli_query($db,"UPDATE item SET item_description='$item_description', item_price='$item_price',Item_Availability='$Item_Availability' WHERE item_number='$item_number'");

header("Location:Items.php");
}


if (isset($_GET['item_number']) && is_numeric($_GET['item_number']) && $_GET['item_number'] > 0)
{

$item_number=$_GET['item_number'];
$result = mysqli_query($db,"SELECT * FROM item WHERE item_number =".$_GET['item_number']);

$row = mysqli_fetch_array($result);

if($row)
{

$item_number = $row['item_number'];
$item_description = $row['item_description'];
$item_price = $row['item_price'];
$Item_Availability = $row['Item_Availability'];
}
else
{
echo "No results!";
}
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Edit Item</title>
</head>
<body>



<form action="" method="post" action="edit.php">
<input type="hidden" name="item_number" value="<?php echo $item_number; ?>"/>

<table border = "1">
<tr>
<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
</tr>
<tr>
<td width="179"><b><font >Item Name<em>*</em></font></b></td>
<td><label>
<input type="text" name="item_description" value="<?php echo $item_description; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Price<em>*</em></font></b></td>
<td><label>
<input type="text" name="item_price" value="<?php echo $item_price ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Availability<em>*</em></font></b></td>
<td><label>
  <select name="Item_Availability" id="Item_Availability">
  <option value="Available">Available</option>
  <option value="Unavailable">Unavailable</options>
  </select>
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Edit Records">
</label></td>
</tr>
</table>
</form>
</body>
</html>
