<?php
   include 'connectdb.php';
   $query = "SELECT customerID, firstName, lastName, phone FROM customer";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who's phone number would you like to change? </br>";
   while ($row = mysqli_fetch_assoc($result)) {//select who's phone number you would like to change by checking radio buttons
        echo '<input type="radio" name="customers" value="';
        echo $row["customerID"];
        echo '">' . $row["customerID"] . ": " . $row["lastName"] . " " . $row["firstName"] . " " . $row["phone"] . "<br>";
   }
   mysqli_free_result($result);
   mysqli_close($connection);
?>