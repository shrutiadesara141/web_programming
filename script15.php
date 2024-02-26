<html>
     <form>
	       <p> Enter value:</p>
		   <input type="number" name="nm1">
		   <p> Enter value:</p>
		   <input type="number" name="nm2">
		   <p> Enter value:</p>
		   <input type="number" name="nm3"><br><br>
		   
		   <input type="submit" name="submit">
		   
	 </form>
</html>

<?php

$a=$_GET['nm1'];
$b=$_GET['nm2'];
$c=$_GET['nm3'];

  if($a>$b)
  {
	  echo "A is big";
  }
  elseif($b>$c)
  {
	  echo "B is big";
  }
  else
  {
	  echo "C is big";
  }
  
?>