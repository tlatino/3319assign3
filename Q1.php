<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BUY AND SELL</title>
<link rel="stylesheet" href="Q1.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to the buy and sell</h1>
<h2>Our Customers</h2>
<form action="getcustomerpurchases.php" method="post">//get specific customer data
<?php
   include 'Q1getCustomerData.php';//display data
?>
<input type="submit" value="Get Customer Purchases">
</form> 

<form class= "buttonwrap" method="get" action="Q2.php">//go to product info section
    <button type="submit">Products </button>
</form>
<form class="buttonwrap" method="get" action="Q9.php">//go to purchase info section
    <button type="submit">Purchases</button>
</form>
<form class="buttonwrap" method="get" action="Q4.php">//go to customer info section
   <button type="submit">Customers</button>
</form>
</body>
</html>

