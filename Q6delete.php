<?php
   $query = "DELETE FROM customer WHERE customerID='" . $_POST['customers6'] . "'";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
?>
