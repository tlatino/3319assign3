<?php
   include 'connectdb.php';
   $query = "DELETE FROM customer WHERE customerID='" . $_POST['customers6'] . "'";
   $result = mysqli_query($connection,$query);//delete the customer
   if (!$result) {
        die("databases query failed.");
    }
   mysqli_close($connection);
?>
