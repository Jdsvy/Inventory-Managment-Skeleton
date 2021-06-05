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
<h1 style="text-align:center">Shipping Information</h1>
<form method="POST" class="Shipping" action="addShipping.php">
 <?php
         $conn = new mysqli("localhost","root","","EzMates");
         $sql = "SELECT order_number FROM order_item ORDER BY order_number DESC LIMIT 1";
         $result = $conn->query($sql);
         if ($result -> num_rows >  0)
         {
         ?>
         <div class="OrderNumber">
         <label>Order Number:</label>
         <?php 
         
         while ($row = $result->fetch_assoc())  {
         echo $row['order_number'];
         }
         }

         
        ?>
        </div>
        <div class="row">
        <div class="container">
        <div class="ShipName">
        <label for="name">Full Name</label>
        <input type="text" class="Name" name="customer_ship_to_name"> 
        </div>
          
        <div class="Address1">
        <label for="name">Address 1</label>
        <input type="text" class="Address1" name="customer_ship_to_address_line_1"> 
        </div>

        <div class="Address2">
        <label for="name">Address 2</label>
        <input type="text" class="Address2" name="customer_ship_to_address_line_2"> 
        </div>

        <div class="City">
        <label for="name">City</label>
        <input type="text" class="City" name="customer_ship_to_city"> 
        </div>

        <div class="State">
        <label for="name">State</label>
        <input type="text" class="State" name="customer_ship_to_state"> 
        </div>

        <div class="Zip">
        <label for="name">Zip</label>
        <input type="text" class="Zip" name="customer_ship_to_zip"> 
        </div>

        <button id = "button" type="submit" class="Shippingbutton" onclick="submitFunction();" name="add" >Purchase item</button>

        </div>
        </div>
        <script>
        function submitFunction(){
                  alert("You item was purchase");
            };
          </script>  
</form> 
<body>
</html>