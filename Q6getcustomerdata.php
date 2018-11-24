<?php
   include 'connectdb.php';
   $query = "SELECT customerID, firstName, lastName FROM customer";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "<h3>Who Are You Deleting? </h3></br>";
   echo "<table>";
   while ($row = mysqli_fetch_assoc($result)) {//display all the people that can be deleted
        echo '<tr><td><input type="radio" name="customers6" value="';
        echo $row["customerID"];
        echo '"></td><td>' . $row["customerID"] . ": " . $row["lastName"] . ", " . $row["firstName"] . "</td></tr>";
   }
   echo "</table>";
   mysqli_free_result($result);
   mysqli_close($connection);
?>
