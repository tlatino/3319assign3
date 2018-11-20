
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
   include 'Q9getprod.php';
?>
</br></br></br></br>
<?php
   include 'Q9calc.php';
?>
</br></br></br></br>
<input type="submit" value="Find Sales" />
</form>
</br></br></br></br>
<?php
   include 'Q8.php';
?>
</br></br></br></br>
<?php
   include 'Q7.php';
?>
</body>
</html>
