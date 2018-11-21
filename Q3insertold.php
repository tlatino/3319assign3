<?php
   include 'connectdb.php';
   $query = "UPDATE purchase SET quantity=" . $_POST['qnt'] . " WHERE productID='" . $_POST['prodID'] ."' AND customerID='" . $_POST['custID'] . "'";
   $result = mysqli_query($connection,$query);//update purchase in table to new quantity
   if (!$result) {
        die("databases query failed.");
    }
   mysqli_close($connection);
?>
