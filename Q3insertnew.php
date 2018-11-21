<?php
   include 'connectdb.php';
   $query = "INSERT INTO purchase(customerID, productID, quantity) VALUES('" . $_POST['custID'] . "', '" . $_POST['prodID'] . "', " . $_POST['qnt'] . ");";
   $result = mysqli_query($connection,$query);  //insert a new purchase into purchase table
   if (!$result) {
        die("databases query failed.");
    }
   mysqli_close($connection);
?>
