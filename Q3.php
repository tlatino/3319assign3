<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BUY AND SELL</title>
<link rel="stylesheet" href="Q2.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<H2 style="text-align: center">Insert a new purchase:</H2></br>
<form style="text-align: center;" method="post" action="">
 Product ID: <input type='text' name='prodID'></br>
Customer ID: <input type='text' name='custID'></br>
   Quantity: <input type='text' name='qnt'></br>
<?php
   include 'Q3check.php'
?>
<?php
if(isset($check)){
   if($check == 2){
      echo "<h1>You cannot buy less products than you already have.</h1></br>";
   }
   else if($checkprod == 0){
     echo "<h1>The product does not exist.</h1></br>";
   }
   else if($checkcust == 0){
     echo "<h1>The customer does not exist.</h1></br>";
   }
   else if($check==1){
         include 'Q3insertold.php';
   }
   else{
         include 'Q3insertnew.php';
   }
   echo "<meta http-equiv='refresh' content='0'>";
}
?>
<input type="submit" value="Update purchase list" />
</form>
</body>
</html>
