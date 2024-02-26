<html>
<body>
<form action="script10.php" method="get">
<label> Enter lenghth:</label>
<input type="number" name="l"><br><br>
<label> Enter width"</label>
<input type="number" name="w"><br><br>
<input type="submit" name="sumbit"><br><br>
</form>
</body>
</html>

<?php

$width=$_REQUEST['w'];
$length=$_REQUEST['l'];

  $ans=$width*$length;

echo $ans;
?>
