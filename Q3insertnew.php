<?php
   $query = "INSERT INTO purchase(customerID, productID, quantity) VALUES('" . $_POST['custID'] . "', '" . $_POST['prodID'] . "', " . $_POST['qnt'] . ");";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
?>
