<html>
<body>
<form action="script12.php" method="get">
<label> Enter String1: </label>
<input type="text" name="str1" id="str">
<label> Enter String2: </label>
<input type="text" name="str2" id="str">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php

$string1=$_GET['str1'];
$string2=$_GET['str2'];


echo "$string1"  , "$string2";

?>