<?php  
   include 'connectdb.php';
   $checkcust=0;
   $query = "SELECT customerID FROM customer";
   $result = mysqli_query($connection, $query);
   if (!$result) {
        die("databases query failed.");
   }
   while ($row = mysqli_fetch_assoc($result)) {
     if($row['customerID'] == $_POST['custID']){//check if the customer already has the enterred ID
        $checkcust=1;
     }
   }

   if($checkcust == 1){
      echo "<h1>A customer already has that ID.</h1></br>";
   }

   else{
      $query = "INSERT INTO customer(customerID, firstName, lastName, city, phone) VALUES('" . $_POST['custID'] . "' , '" . $_POST['FN'] . "', '" . $_POST['LN'] . "', '" . $_POST['city'] . "', '" . $_POST['phone'] . "')";
      $result = mysqli_query($connection,$query);//create and insert customer
      if (!$result) {
         die("databases query failed.");
      }
   }   
   mysqli_close($connection);

?>
