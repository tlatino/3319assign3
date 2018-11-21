<?php
   $query = "UPDATE customer SET phone='" . $_POST['phonenum'] . "' WHERE customerID='" . $_POST['customers'] . "'";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
?>
