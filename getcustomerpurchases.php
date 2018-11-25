<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BUY AND SELL</title>
<link rel="stylesheet" href="Q2.css">
</head>
<body>
<?php
include 'connectdb.php';//connecting to db
?>
<h1>Here are their purchases</h1>
<ol>
<?php
   $whichCustomer= $_POST["customers1"];//get the customer from Q1.php selection
   //$query = 'SELECT description, purchases.quantity FROM product LEFT JOIN (SELECT productID, purchase.quantity FROM customer JOIN purchase ON customer.customerID=purchase.customerID WHERE purchase.customerID="' . $whichCustomer . '") as purchases ON purchases.productID=product.productID WHERE purchases.productID IS NULL';
   $query = 'SELECT description, pur.quantity FROM customer c INNER JOIN purchase pur INNER JOIN product pro  ON c.customerID=pur.customerID AND pur.productID=pro.productID WHERE pur.customerID="' . $whichCustomer . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["quantity"] . " " . $row["description"];//display the products they purchased
	echo '</li>';
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
