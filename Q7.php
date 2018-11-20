
<?php
include 'connectdb.php';
?>
<form style="text-align: center;" method="post" action="">
 Quantity: <input type="text" name="quantity"><br>
 <?php
   include 'Q7find.php';
 ?>
<input type="submit" value="Find Purchases with large sales" />
</form>
