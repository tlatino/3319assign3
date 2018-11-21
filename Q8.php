<form style="text-align: center;" method="post" action="">

<?php
   include 'connectdb.php';
   $query = "SELECT description FROM product LEFT JOIN purchase ON purchase.productID=product.productID WHERE purchase.customerID IS NULL";
   $result = mysqli_query($connection,$query);//get the products never purchased
   if (!$result) {
        die("databases query failed.");
    }
   echo "Products never purchased: ";
   while ($row = mysqli_fetch_assoc($result)) {//display products never purchased
        echo "<li>" . $row['description'] . "</li></br>";
   }
   mysqli_free_result($result);
   mysqli_close($connection);
?>
</form>
