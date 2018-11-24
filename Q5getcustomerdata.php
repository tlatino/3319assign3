<?php
   include 'connectdb.php';
   $query = "SELECT customerID, firstName, lastName, phone FROM customer";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "<h3>Who's phone number would you like to change?</h3></br>";
   echo '<table style: "margin-left: auto; margin-right: auto;">';
   while ($row = mysqli_fetch_assoc($result)) {//select who's phone number you would like to change by checking radio buttons
        echo '<tr><td><input type="radio" name="customers" value="' .  $row["customerID"] . '"></td><td>' . $row["customerID"] . ': ' . $row["lastName"] . ' ' . $row["firstName"] . ' ' . $row["phone"] . '</td></tr>';
   }
   echo "</table>";
   mysqli_free_result($result);
   mysqli_close($connection);
?>
