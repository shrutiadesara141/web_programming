<html>
<body>
<form action="script11.php" method="get">
<label>Enter Value:</label>
<input type="number" name="nm" id="nm">
<input type="submit" name="submit">
</form>
</body>
</html>


<?php

$num=$_GET['nm'];

if($num%2==0)
{
	echo "even number";
}
else
{
	echo "odd number";
}

