<?php 
  session_start(); 

// initializing variables
$order_number  = "";
$customer_ship_to_name= "";
$customer_ship_to_address_line_1= "";
$customer_ship_to_address_line_2= "";
$customer_ship_to_city= "";
$customer_ship_to_state= "";
$customer_ship_to_zip= "";

$conn = new mysqli("localhost","root","","EzMates");
$sql = "SELECT order_number FROM order_item ORDER BY order_number DESC LIMIT 1";
$result = $conn->query($sql);
if ($result -> num_rows >  0)
{
?>
<?php 
while ($row = $result->fetch_assoc())  {
$order_number = $row['order_number'];
}
}

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
 /* $order_number=mysqli_real_escape_string($db, $_POST['order_number']);*/
  $customer_ship_to_name=mysqli_real_escape_string($db, $_POST['customer_ship_to_name']);
  $customer_ship_to_address_line_1=mysqli_real_escape_string($db, $_POST['customer_ship_to_address_line_1']);
  $customer_ship_to_address_line_2=mysqli_real_escape_string($db, $_POST['customer_ship_to_address_line_2']);
  $customer_ship_to_city=mysqli_real_escape_string($db, $_POST['customer_ship_to_city']);
  $customer_ship_to_state=mysqli_real_escape_string($db, $_POST['customer_ship_to_state']);
  $customer_ship_to_zip=mysqli_real_escape_string($db, $_POST['customer_ship_to_zip']);
  
    $query = "INSERT INTO orders (order_number,customer_ship_to_name,customer_ship_to_address_line_1,customer_ship_to_address_line_2,customer_ship_to_city,customer_ship_to_state,customer_ship_to_zip) 
  			  VALUES('$order_number','$customer_ship_to_name','$customer_ship_to_address_line_1','$customer_ship_to_address_line_2','$customer_ship_to_city','$customer_ship_to_state','$customer_ship_to_zip')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: Shipping.php');
  
}