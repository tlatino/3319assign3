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
<table>
<tr>
 <td>Product ID:</td><td> <input type='text' name='prodID'></td>
</tr>
<tr>
<td>Customer ID:</td><td> <input type='text' name='custID'></td>
</tr>
<tr>
<td>Quantity:</td><td> <input type='text' name='qnt'></td><!get the custoner id and product id as well as the new quantity that they want>
</tr>
</table>
<?php
   include 'Q3check.php'//check which case it is
?>
<?php
if(isset($check)){
   if($check == 2){
      echo "<h1>You cannot buy less products than you already have.</h1></br>";//if the quantity for an old purchase order is lower than before
   }
   else if($checkprod == 0){
     echo "<h1>The product does not exist.</h1></br>";//if productID was not found
   }
   else if($checkcust == 0){
     echo "<h1>The customer does not exist.</h1></br>";//if customerID was not found
   }
   else if($check==1){
         include 'Q3insertold.php';//if purchase order needs to be updated
   }
   else{
         include 'Q3insertnew.php';//if purchase order is new
   }
   echo "<meta http-equiv='refresh' content='0'>";//refresh page 
}
?>
<input type="submit" value="Update purchase list" />
</form>
</body>
</html>
