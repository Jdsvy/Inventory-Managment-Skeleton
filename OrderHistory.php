<head>
<title>Order History</title>
	<link rel="stylesheet" type="text/css" href="StylePage.css">
</head>

<h1 style="text-align:center">Order History</h1>

</body>
                                        <table class="table text-dark text-center">
                                            <thead class="text-uppercase">
                                                <tr class="table-active">
                                                    <th scope="col">Order Number</th>
                                                    <th scope="col">Proudct</th>
                                                    <th scope="col">Price</th>
													                           <th scope="col">Quantity</th> 
                                                     <th scope="col">Total Price</th>    
                                                </tr>
                                            </thead>
                                            <tbody>			
      
      
      <?php 
               $conn = new mysqli("localhost","root","","EzMates");
               $sql = "SELECT * FROM order_item INNER JOIN item ON item.item_number = order_item.item_number";

               $result = $conn->query($sql);
               if ($result -> num_rows >  0) {
				  
                 while ($row = $result->fetch_assoc()) 
				 {
                   ?>           
                   <tr>
                    <th><?php echo $row["order_number"] ?></th>
                      <th><?php echo $row["item_description"] ?></th>
                      <th><?php echo "$".$row["item_price"]  ?></th>
                      <th><?php echo $row["order_quantity"] ?></th>
                      <?php
                      $total = $row['order_quantity'] * $row['item_price'];
                      ?>
                     <th><?php echo "$".number_format((float)"$".$total, 2, '.', ''); ?></th>

                    
                      
                    </tr>
            <?php
                 
                 }
               }