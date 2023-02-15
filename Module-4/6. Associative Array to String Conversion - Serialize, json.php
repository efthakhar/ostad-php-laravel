<?php


// we can not store array directly in database or file
// we need to convert them to string like data forexample:json, serialize data 

$stu = ['asif','arif','akib'];

$serialize_stu_data = serialize($stu); // serialize a array data 

echo $serialize_stu_data;
echo PHP_EOL;

// we can also unserialize a serialized data
$unserialized_data = unserialize($serialize_stu_data);
print_r($unserialized_data);

echo PHP_EOL;

$json_data = json_encode(['a'=>'akib','b'=>'badol']);
echo $json_data;
echo PHP_EOL;
$array_data = json_decode($json_data,true); 
// if second parameter not passed as true a std object returned instead of array

print_r($array_data);


?>