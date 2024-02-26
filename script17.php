<html>
<body>
      <form method="post">
	    YEAR:<input type="number" name="yr">
		
		<input type="submit" name="submit">
</form>
</body>
</html>

<?php

$year=$_REQUEST['yr'];

      if($year % 400 == 0)
      {
		  echo $year. "is a leap year";
	  }
	  elseif($year % 100 == 0)
	  {
	   echo $year. "is not a leap year";  
	  }
	  elseif($year % 4 == 0)
	  {
	    echo $year. "is a leap year";
	  }
	  else
	  {
		echo $year. "is not a leap year";
	  }
	  
?> 