<?php 
  session_start(); 
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
<title>Add Item</title>
	<link rel="stylesheet" type="text/css" href="StylePage.css">
</head>
<body>     
     <h1 style="text-align:center">Add Items</h1>
<body>
<form method="POST" class="adding" action="additem.php"> <!-- Insert into datase using additem -->
  <div class="addName">
    <label for="name">Item Name</label>
    <input type="text" class="item" name="item_description"> 
    
  <div class="addPrice">
    <label for="name">Price</label>
    <input type="text" class="item_price" name="item_price">
  </div>

  <div class="Availability">
  <label for="Availability">Availability</label>
  <select name="Item_Availability" id="Item_Availability">
  <option value="Available">Available</option>
  <option value="Unavailable">Unavailable</options>
  </select>
  </div>

  <button type="submit" class="add button" name="add">Add item</button>
 
</form> 
</body>
                                <h4 class="header-title">Products</h4>
                                        <table class="table text-dark text-center">
                                            <thead class="text-uppercase">
                                                <tr class="table-active">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Availability</th>
													                           <th scope="col">Action</th>    
                                                </tr>
                                            </thead>
                                            <tbody>
			<?php 
               $conn = new mysqli("localhost","root","","EzMates");
               $sql = "SELECT * FROM item";
               $result = $conn->query($sql);
               if ($result -> num_rows >  0) {
				  
                 while ($row = $result->fetch_assoc()) 
				 {
                   ?>
                  
                   
                   <tr>
                      <th><?php echo $row["item_number"] ?></th>
                      <th><?php echo $row["item_description"] ?></th>

                      <th><?php echo "$".$row["item_price"]  ?></th>

                      <th><?php echo $row["Item_Availability"]  ?></th>

					  <!-- Delete -->
            <th><a href="edit.php?item_number=<?php echo $row["item_number"] ?>">Edit</a>
					   <a href="Delete.php?id=<?php echo $row["item_number"] ?>">Delete</a></th>
                    
                      
                    </tr>
            <?php
                 
                 }
               }
            ?>

                                            </tbody>
                                        </table>          
<html>

</html>
</body>

</html>