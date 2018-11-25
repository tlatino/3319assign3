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
<form style="text-align: center;" method="post" action="Q2.php"><!reload on submit>
<select name="ordering">
	<option selected="selected" value="ASC">Ascending</option>//option ascending and descending table
	<option value="DESC">Descending</option>
</select>
<select name="type">
        <option selected="selected" value="cost">Price</option>// option price or name 
        <option value="description">Name</option>
</select>
<input type="submit" value="REORDER" /><!button to reorder table>
<?php
   include 'Q2getproducts.php';//display table
?>
</form>
<form class= "buttonwrap" method="get" action="Q1.php"><!go to product info section>
    <button type="submit">Home </button>
</form>
<form class="buttonwrap" method="get" action="Q9.php"><!go to purchase info section>
    <button type="submit">Purchases</button>
</form>
<form class="buttonwrap" method="get" action="Q4.php"><!go to customer info section>
   <button type="submit">Customers</button>
</body>
</html>

