<?php 
  session_start(); 

// initializing variables
$Item_Name="";
$item_description = "";
$item_price= "";


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
  $Item_Name=mysqli_real_escape_string($db, $_POST['Item_Name']);
  $item_description=mysqli_real_escape_string($db, $_POST['item_description']);
  $item_price=mysqli_real_escape_string($db, $_POST['item_price']);
  
    $query = "INSERT INTO item (Item_Name,item_description,item_price,) 
  			  VALUES('$Item_Name','$item_description','$item_price')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: items.php');
  
}