<?php 
  session_start(); 
?>
 <!DOCTYPE html>
 <html lang="en" dir = "ltr">
<head>
	<title>Purchase</title>
  <link rel="stylesheet" type="text/css" href="StylePage.css">
</head>
<body>
<h1 style="text-align:center">Pruchase Item Here</h1>
<form method="POST" class="purchaseitems" action="purchaseitems.php">
 <?php 
                $conn = new mysqli("localhost","root","","EzMates");
                $sql = "SELECT item_number, item_description, item_price FROM item WHERE Item_Availability='Available'";
                $result = $conn->query($sql);
                if ($result -> num_rows >  0)
                {
                ?>
                <label>Choose an Item:</label>
                <?php 
                echo "<SELECT name='item_number'>";
                while ($row = $result->fetch_assoc())  {
                  echo "<option value='".$row['item_number']."'>" . $row['item_description'] ."</option>";
                }
              }
              echo '</select>';  

          ?>
          <div class="addQuantity">
          <label for="name">Quantity</label>
          <input id = "order_quantity" type="number" class="order_quantity" name="order_quantity" min="1" max="">
          </div> 
          <button id = "button" type="submit" class="add button" onclick="submitFunction();" name="add" >Purchase item</button>
          <script>
</form> 
<body>
</html>