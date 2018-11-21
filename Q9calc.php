<?php
   include 'connectdb.php';
   $query = "SELECT description, cost, SUM(purchase.quantity) as sales FROM purchase JOIN product ON purchase.productID=product.productID WHERE purchase.productID='" . $_POST["prod"] ."'";
   $result = mysqli_query($connection,$query);//get the quantity of a certain product purchased
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {//display total sales
        echo $row["description"] . " sales: $" . $row["sales"] * $row["cost"];
   }
   mysqli_free_result($result);
   mysqli_close($connection);
?>

