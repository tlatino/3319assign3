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
<H2>Insert a new purchase:</H2></br>
<form style="text-align: center;" method="post" action="">
Customer ID: <input type='text' name='custID'></br>
First Name: <input type='text' name='FN'></br>
Last Name: <input type='text' name='LN'></br>
City: <input type='text' name='city'></br>
Phone: <input type='text' name='phone'></br>
<?php

if(isset($_POST['custID']) && isset($_POST['FN']) && isset($_POST['LN']) && isset($_POST['city']) && isset($_POST['phone']))
      include 'Q4addcust.php';

?>
   <input type="submit" value="Add the customer" />
</form>
</body>
</html>
