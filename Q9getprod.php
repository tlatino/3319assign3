<?php
   $query = "SELECT description, productID FROM product";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "<select name='prod'>";
   while ($row = mysqli_fetch_assoc($result)) {
	echo "<option value='" . $row['productID'] . "'>" . $row['description'] . "</option>";
   }
   echo "</select>";
   mysqli_free_result($result);
?>
