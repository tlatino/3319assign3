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
<form style="text-align: center;" method="post" action="">
<?php
   include 'Q5getcustomerdata.php';//get and display the customer data
?>
<input type="text" name="phonenum" placeholder="new number"required/><!get new phone number>
<input type='submit' value='Update Phone Number'>
</form>
<?php
if(isset($_POST['phonenum']) && isset($_POST['customers'])){//if they chose and inputed new number

   include 'Q5update.php';//update the number and refresh page to show changes
   echo "<meta http-equiv='refresh' content='0'>";
}
?>
</body>
</html>
