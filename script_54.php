<?php

 $a=array(
       array('id'=>123,'Firstname'=>"Shah",
	   'Lastname'=>"Dhruvi"),
	   array('id'=>456,'Firstname'=>"Pansuriya",
	   'Lastname'=>"Rutvi"),
	   array('id'=>123,'Firstname'=>"Ranpara",
	   'Lastname'=>"Arti"),
	 );
	 
	 $Last_name=array_column($a,'Lastname');
	 print_r($Last_name);
?>
	       