<?php
if(isset($_POST["quantity"])){
$query = "select description, fn, ln, q from (select customer.firstName as fn, customer.lastName as ln, purchase.quantity as q, purchase.productID as p from purchase join customer on purchase.customerID=customer.customerID where purchase.quantity>" . $_POST['quantity'] . ") as foo join product where foo.p=product.productID";
$result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Products purchased more than " . $_POST["quantity"] .  " times: ";
   while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row["fn"] . " " . $row["ln"] . " Product: " . $row['description'] . " Quantity: " . $row["q"] .  "</li></br>";
   }
   mysqli_free_result($result);
}
?>
