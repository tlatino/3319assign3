<?php
   $query = "SELECT description, cost, SUM(purchase.quantity) as sales FROM purchase JOIN product ON purchase.productID=product.productID WHERE purchase.productID='" . $_POST["prod"] ."'";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["description"] . " sales: $" . $row["sales"] * $row["cost"];
   }
   mysqli_free_result($result);
?>

