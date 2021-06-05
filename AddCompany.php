<?php 
  session_start(); 

// initializing variables
$Company_ID  = "";
$Company_Name= "";
$Company_Charge_Amount = "";
$Vat_Charge="";
$Company_Addr= "";
$Company_Phone= "";
$Company_Country= "";


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
  $Company_Name=mysqli_real_escape_string($db, $_POST['Company_Name']);
  $Company_Charge_Amount=mysqli_real_escape_string($db, $_POST['Company_Charge_Amount']);
  $Vat_Charge=mysqli_real_escape_string($db, $_POST['Vat_Charge']);
  $Company_Addr=mysqli_real_escape_string($db, $_POST['Company_Addr']);
  $Company_Phone=mysqli_real_escape_string($db, $_POST['Company_Phone']);
  $Company_Country=mysqli_real_escape_string($db, $_POST['Company_Country']);
  
    $query = "INSERT INTO company (Company_Name,Company_Charge_Amount,Vat_Charge,Company_Addr,Company_Phone,Company_Country) 
  			  VALUES('$Company_Name','$Company_Charge_Amount','$Vat_Charge','$Company_Addr','$Company_Phone','$Company_Country')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: Company.php');
  
}