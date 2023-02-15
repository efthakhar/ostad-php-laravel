<?php

$students = " Asif, Riaz, Sakib, Sadman";

// string to array :
$stu_array = explode(",", $students);
print_r($stu_array);

// array to string
$string = join(' - ',$stu_array); 
echo $string;

    
// string to array multiple delimeter 
$string = 'asif, akib -rakib ,fahim';

$arr = preg_split('/(,|-)/',$string);
print_r($arr);
?>