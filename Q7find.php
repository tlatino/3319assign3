<?php
include 'connectdb.php';
if(isset($_POST["quantity"])){
$query = "select description, fn, ln, q from (select customer.firstName as fn, customer.lastName as ln, purchase.quantity as q, purchase.productID as p from purchase join customer on purchase.customerID=customer.customerID where purchase.quantity>" . $_POST['quantity'] . ") as foo join product where foo.p=product.productID";
$result = mysqli_query($connection,$query);//list all products with purchase bigger than the one entered
   if (!$result) {
        die("databases query failed.");
    }
   if (mysqli_num_rows($result)==0) { echo "No products with that many purchases</br>"; }
   else {echo "Products purchased more than " . $_POST["quantity"] .  " times: ";}
   while ($row = mysqli_fetch_assoc($result)) {//list the products
        echo "<li>" . $row["fn"] . " " . $row["ln"] . " Product: " . $row['description'] . " Quantity: " . $row["q"] .  "</li></br>";
   }
   mysqli_free_result($result);
}
mysqli_close($connection);
?>
