
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
<form style="text-align: center;" method="post" action="">
<?php
   include 'Q9getprod.php';//get dropdown
?>
</br></br>
<?php
   include 'Q9calc.php';//calculate and display the total sales
?>
</br></br>
<input type="submit" value="Find Sales" />
</form>
</br></br>
<?php
   include 'Q8.php';//find products never purchased
?>
</br></br>
<h4 style="text-align: center;">Find Products That Have Been Bought More Than This.</h4>
<?php
   include 'Q7.php';//find products bought in large quanities
?>
<?php
   include 'Q3.php';//insert a new purchase
?>
</body>
</html>
