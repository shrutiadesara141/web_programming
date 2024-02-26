<?php

  function myfunction($d)
  {
	  return($d+$d);
  }
  
  $a=array(1,2,3,4,5);
  
  print_r(array_map("myfunction",$a));
  
?>