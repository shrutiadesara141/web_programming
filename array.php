<?php
echo "Index array:";
$student=array(1,2,3,4,5,6,7,8,9,10);
foreach($student as $student=>$val)
{
    echo $student."=>".$val."<br>";
}

echo"Associative array:";
$student_detail=array('name'=>'a','rollno'=>1,'address'=>'london','percentage'=>88.22,'grade'=>'A','mobile no'=>12313,'class'=>'B2','department'=>'BCA','mark'=>90,'gender'=>'male');
foreach($student_detail as $student_detail=>$val)
{
    echo $student_detail."=>".$val."<br>";
}

echo"Multidimensional array:";
$student_master=array(array(0,1,2,3,4,5,6,7),array(0,1,2,3,4,5,6,7),array(0,1,2,3,4,5,6,7),array(0,1,2,3,4,5,6,7),array(0,1,2,3,4,5,6,7),array(0,1,2,3,4,5,6,7),array(0,1,2,3,4,5,6,7,8));
foreach($student_master as $stud)
{
    
    print_r($stud);
    echo "<br>";
}

?>