<?php
   $query = "SELECT * FROM product ORDER BY description ASC";
   if(isset($_POST["type"]) && isset($_POST["ordering"])){
   $query = "SELECT * FROM product ORDER BY " . $_POST["type"] . " " . $_POST["ordering"] ;   
   }
   $result = mysqli_query($connection,$query);
   
   if (!$result) {
        die("databases query failed.");
    }
   echo "So many products wow </br>";
   echo "<table>";
   echo "<th>Product Name</th>";
   echo	"<th>Price</th>";
   echo	"<th>Quantity Left</th>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['description'] . " </td>";
	echo "<td>" . $row['cost'] . " </td>"; 
	echo "<td>" . $row['quantity'] . " </td>";
	echo "</tr>";
   }
   echo "</table>";
   mysqli_free_result($result);
?>
