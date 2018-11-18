<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BUY AND SELL</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are their purchases</h1>
<ol>
<?php
   $whichCustomer= $_POST["customers"];
   $query = 'SELECT description, quantity FROM product LEFT JOIN (SELECT productID FROM customer JOIN purchase ON customer.customerID=purchase.customerID WHERE purchase.customerID="' . $whichCustomer . '") as purchases ON purchases.productID=product.productID WHERE purchases.productID IS NULL';

   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["quantity"] . " " . $row["description"];
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
