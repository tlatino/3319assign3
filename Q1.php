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
<form action="getcustomerpurchases.php" method="post">
<?php
   include 'Q1getCustomerData.php';
?>
<input type="submit" value="Get Customer Purchases">
</form> 
</body>
</html>

