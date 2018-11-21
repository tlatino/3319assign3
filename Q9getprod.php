<?php
   include 'connectdb.php';
   $query = "SELECT description, productID FROM product";
   $result = mysqli_query($connection,$query);//get the product that the user wants to find the purchases of
   if (!$result) {
        die("databases query failed.");
    }
   echo "<select name='prod'>";
   while ($row = mysqli_fetch_assoc($result)) {//display them as a dropdown
	echo "<option value='" . $row['productID'] . "'>" . $row['description'] . "</option>";
   }
   echo "</select>";
   mysqli_free_result($result);
   mysqli_close($connection);
?>
