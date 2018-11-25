<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BUY AND SELL</title>
<link rel="stylesheet" href="Q2.css">
</head>
<body>
<?php
   include 'connectdb.php';
?>
<H2 style="text-align: center">Insert a new customer:</H2></br>
<form style="text-align: center;" method="post" action="">
<table style="margin-left: auto; margin-right: auto;">
<tr>
   <th>Customer ID:</th><th> <input type='text' name='custID'></th>
</tr>
<tr>
   <th>First Name:</th><th> <input type='text' name='FN'></th>
</tr>
<tr>
   <th>Last Name:</th><th> <input type='text' name='LN'></th>
</tr>
<tr>
   <th>City: </th><th><input type='text' name='city'></th><!get the customer information for new customer>
</tr>
<tr>
   <th>Phone:</th><th> <input type='text' name='phone'></th>
</tr>
</table>
<?php

if(isset($_POST['custID']) && isset($_POST['FN']) && isset($_POST['LN']) && isset($_POST['city']) && isset($_POST['phone']))
   include 'Q4addcust.php';//add the customer if every field was set
?>
   <input type="submit" value="Add the customer" />
</form>
</br></br>
<?php
   include 'Q5.php';//allow to update phone number on same page
?>
</br></br>
<?php
   include 'Q6.php';//allow to delete customers on same page
?>
<form class= "buttonwrap" method="get" action="Q2.php"><!go to product info section>
    <button type="submit">Products </button>
</form>
<form class="buttonwrap" method="get" action="Q9.php"><!go to purchase info section>
    <button type="submit">Purchases</button>
</form>
<form class="buttonwrap" method="get" action="Q1.php"><!go to customer info section>
   <button type="submit">Home</button>
</body>
</html>
