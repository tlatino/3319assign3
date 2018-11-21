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
   include 'Q6getcustomerdata.php';//get list of customers
?>
<input type='submit' value='Delete Customer'>
</form>
<?php
if(isset($_POST['customers6'])){

   include 'Q6delete.php';//delete and refresh page
   echo "<meta http-equiv='refresh' content='0'>";
}
?>
</body>
</html>
