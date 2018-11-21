<?php
   $query = "SELECT customerID, firstName, lastName FROM customer";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who Are you Deleting? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customers6" value="';
        echo $row["customerID"];
        echo '">' . $row["customerID"] . ": " . $row["lastName"] . ", " . $row["firstName"] . "<br>";
   }
   mysqli_free_result($result);
?>
