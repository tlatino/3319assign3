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
   include 'Q5getcustomerdata.php';
?>
<input type='text' name='phonenum' value='New Phone Number'>
<input type='submit' value='Update Phone Number'>
</form>
<?php
if(isset($_POST['phonenum']) && isset($_POST['customers'])){

   include 'Q5update.php';
   echo "<meta http-equiv='refresh' content='0'>";
}
?>
</body>
</html>
