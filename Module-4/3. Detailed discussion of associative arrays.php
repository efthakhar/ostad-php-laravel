<?php


// if we mark every element of an array with a key , the array is 
// associative array
$students = [
    'stu1'=>'asif',
    'stu2'=>'akib',
    'stu3'=>'rakib'
];

// associative array can not be accessed in this ways: students[0],students[1]
// So we can not run forloop on an associative array
// to run a loop on associative array we use foreach loop

foreach($students as $key=>$value)
{
    echo "\"$key\" corresponding to  $value \n";
}

echo PHP_EOL;

// we can make new array from given array with its keys using array_keys
$keys = array_keys($students); // return a new array built with the keys of given array
print_r($keys);

echo PHP_EOL;

// we can make new array from given array with its values using array_values
$values = array_values($students);
print_r($values);

echo PHP_EOL;
    


?>