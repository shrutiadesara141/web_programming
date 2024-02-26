<?php

 function test($abc)
 {
	 return ($abc & 12);
 }
 
 $a=array(11,12,13,14,15);
 print_r(array_filter($a,"test"));
 
 ?>
 