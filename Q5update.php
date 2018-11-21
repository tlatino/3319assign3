<?php
   include 'connectdb.php';
   $query = "UPDATE customer SET phone='" . $_POST['phonenum'] . "' WHERE customerID='" . $_POST['customers'] . "'";
   $result = mysqli_query($connection,$query);//update the phone number of existing customer
   if (!$result) {
        die("databases query failed.");
    }
   mysqli_close($connection);
?>
