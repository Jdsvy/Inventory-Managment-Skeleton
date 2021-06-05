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
<h1 style="text-align:center">Company Information</h1>
<form method="POST" class="AddCompany" action="AddCompany.php">
 <?php
    
        ?>
        </div>
        <div class="row">
        <div class="container">
        <div class="Company Name">
        <label for="name">Company Name</label>
        <input type="text" class="Company_Name" name="Company_Name"> 
        </div>
          
        <div class="Company_Charge_Amount">
        <label for="name">Company Charge</label>
        <input type="text" class="Company_Charge_Amount" name="Company_Charge_Amount">
        </div>

        <div class="Vat_Charge">
        <label for="name">Vat Charge</label>
        <input type="text" class="Vat_Charge" name="Vat_Charge">
        </div>

        <div class="Company_Addr">
        <label for="name">Company Address</label>
        <input type="text" class="Company_Addr" name="Company_Addr"> 
        </div>

        <div class="Company_Phone">
        <label for="name">Company Phone#</label>
        <input type="text" class="Company_Phone" name="Company_Phone"> 
        </div>

        <div class="Company_Country">
        <label for="name">Company Country</label>
        <input type="text" class="Company_Country" name="Company_Country"> 
        </div>

        <button id = "button" type="submit" class="Shippingbutton" onclick="submitFunction();" name="add" >Add Company</button>

        </div>
        </div>
        <script>
        function submitFunction(){
                  alert("Your Company was added");
            };
          </script>  
</form> 
<body>
</html>