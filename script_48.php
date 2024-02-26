<?php

 function myfunction($d1,$d2)
 {
	 return $d1 . "-" . $d2;
 }
 
 $a=array("Rutvi","Palak","Arti");
 print_r(array_reduce($a,"myfunction"));
 
?>
