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
<form  method="post" action="Q2.php">
<select name="ordering">
	<option selected="selected" value="ASC">ascending</option>
	<option value="DESC">descending</option>
</select>
<select name="type">
        <option selected="selected" value="cost">Price</option>
        <option value="description">Name</option>
</select>
<input type="submit" value="REORDER" />
<?php
   include 'Q2getproducts.php';
?>
</form>
</body>
</html>

