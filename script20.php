<html>
<body>
		<form method="post">
		Number:<input type="number" name="number">
		<input type="submit" name="submit">
        </form>
</body>
</html>

<?php

$n=$_REQUEST['number'];
$fact=1;

    if($n < 0)
    {
		echo "neg. number doesnt have factorial";
    }
	else
	{
		for($i=1;$i<=$n;$i++)
		{
			$fact=$fact*$i;
		}
		echo "factorial of $n is $fact";
		
	}
	
	return 0;
?>