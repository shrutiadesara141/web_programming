<?php

$num1=10;
$num2=20;
$num3=30;

if($num1>$num2 && $num1>$num3)
{
	echo "The Largest number is :$num1";
}
else
{
	if($num2>$num1 && $num2>$num3)
	{
	 echo "The Largest number is :$num2";	
	}
	else
	{
		echo "The Largest number is :$num3";
	}
}
?>