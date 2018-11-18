<?php
   $query = "SELECT * FROM customer GROUP BY lastName";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customers" value="';
        echo $row["customerID"];
        echo '">' . $row["lastName"] . " " . $row["firstName"] . " lives in " . $row["city"] . " with phone number " . $row["phone"] . " and agent ID " . $row["agentID"] . "<br>";
   }
   mysqli_free_result($result);
?>

