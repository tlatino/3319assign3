<?php
$dbhost = "localhost";
$dbuser= "cs";
$dbpass = "cs3319";
$dbname = "tlatinoassign2db";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
     die("database connection failed :" .
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
?>

