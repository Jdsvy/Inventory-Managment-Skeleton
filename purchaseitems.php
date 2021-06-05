<?php 
  session_start(); 

// initializing variables
$item_number = "";
$Quant = "";
$total ="";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'EzMates');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


// Add item
if (isset($_POST['add'])) {
  // receive all input values from the form
  echo "connect";
  $item_number=mysqli_real_escape_string($db, $_POST['item_number']);
  $Quant=mysqli_real_escape_string($db, $_POST['order_quantity']);
    $query = "INSERT INTO order_item (item_number,order_quantity) 
  			  VALUES('$item_number', '$Quant')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: Shipping.php');
  
}
