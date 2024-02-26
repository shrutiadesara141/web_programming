<html>
<body>
		<form method="post">
		Radius:<input type="number" name="radius">
		<input type="submit" name="submit">
        </form>
</body>
</html>

<?php

$ra=$_REQUEST['radius'];
$PI=3.14;

$radius=$ra*$ra*$PI;

echo "The area of circle is: $radius";

?>