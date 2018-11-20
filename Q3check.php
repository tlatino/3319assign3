<?php

if(isset($_POST['prodID']) && isset($_POST['custID']) && isset($_POST['qnt'])){
   $check = 0;
   $query = "SELECT * FROM purchase";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
     if($row['productID'] == $_POST['prodID'] && $row['customerID'] ==$_POST['custID']){
        $check=1;
        if($row['quantity']>$_POST['qnt']){
           $check=2;
        }
     }
   }
   mysqli_free_result($result);
   $checkprod=0;
   $query = "SELECT productID FROM product";
   $result = mysqli_query($connection, $query);
   if (!$result) {
        die("databases query failed.");
   }
   while ($row = mysqli_fetch_assoc($result)) {
     if($row['productID'] == $_POST['prodID']){
        $checkprod=1;
     }
   }
   mysqli_free_result($result);
   $checkcust=0;
   $query = "SELECT customerID FROM customer";
   $result = mysqli_query($connection, $query);
   if (!$result) {
        die("databases query failed.");
   }
   while ($row = mysqli_fetch_assoc($result)) {
     if($row['customerID'] == $_POST['custID']){
        $checkcust=1;
     }
   }
   mysqli_free_result($result);
}

?>
