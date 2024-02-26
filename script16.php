<html>
<body>
      <form method="post">
	     write text here:<textarea name="sentence"></textarea>
		 
<input type="submit" name="submit">
</form>
</body>
</html>

<?php

$text=$_REQUEST['sentence'];

  
  $len=strlen($text);
  $coV=0;
  $coC=0;
  
  for($i = 0; $i < $len; $i++)
  {
     if ($text[$i] == 'a' && 'A' || $text[$i] == 'e' && 'E' || $text[$i] == 'i' && 'I' || $text[$i] == 'o' && 'O' || $text[$i] == 'u' && 'U') 
	 {
            $coV += 1;
     }
	 else if ($text[$i] >= 'a' || 'A'  && $text[$i] <= 'z' || 'Z')
	{
            $coC += 1;
    }
	else {
        }
 }

 echo "Number of vowels is $coV \n";
  echo "Number of vowels is $coC \n";
?>