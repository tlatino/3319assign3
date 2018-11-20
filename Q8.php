<form style="text-align: center;" method="post" action="">

<?php
   $query = "SELECT description FROM product LEFT JOIN purchase ON purchase.productID=product.productID WHERE purchase.customerID IS NULL";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Products never purchased: ";
   while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row['description'] . "</li></br>";
   }
   mysqli_free_result($result);
?>
</form>
