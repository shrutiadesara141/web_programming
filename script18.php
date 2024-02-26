<html>
     <form>
	       <p> Enter value:</p>
		   <input type="number" name="nm1">
		   <input type="submit" name="submit">
 </form>
</html>

<?php
$guess=$_GET['nm1'];

$get=rand(1,10);
echo $get;
echo "<br>";

if($guess==$get)
{
   echo "number is same";
}
else
{
   echo "number is not same";
}
?>