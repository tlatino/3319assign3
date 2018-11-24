<?php
   $query = "SELECT * FROM customer GROUP BY lastName";//get all customers listed by last name
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up? </br>";
   echo "<table>";
   echo "<tr><th>Select</th><th>Name</th><th>City</th><th>Phone</th><th>AgentID</th></tr>";
   while ($row = mysqli_fetch_assoc($result)) {//display customers in radio buttons for user to choose
        echo '<tr><td><input type="radio" name="customers" value="';
        echo $row["customerID"];
        echo '"></td><td>' . $row["lastName"] . " " . $row["firstName"] . "</td><td>" . $row["city"] . "</td><td>" . $row["phone"] . "</td><td><tb>" . $row["agentID"] . "</td></tr>";
   }//display all their information
   echo "</table>";
   mysqli_free_result($result);
   mysqli_close($connection);
?>

