<?php


// array is the collection of same type data
$students = ['asif','sakib','rafiq']; // collection of students data


// array built in function of php

// counting array elements
echo "total array elements is ".count($students);
echo PHP_EOL;



// lopping on array 
// traversing array elements using loop
$arr_length = count($students);

// traversing from the first element of array
for($i=0; $i<$arr_length;$i++)
{
    echo "$students[$i] \n";
}

echo PHP_EOL;

// traversing from the last element of the array
// index of last element is (lenght-1) 
for( $i= $arr_length-1 ; $i>=0; $i--)
{
    echo "$students[$i] \n";
}

?>