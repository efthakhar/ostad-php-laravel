<?php

function print_array($array)
{
    foreach ($array as $key => $value) {
        echo "$key => $value \n";
    }
    echo "\n";
}
function array_list($array)
{
    foreach ($array as $key => $value) {
        echo "$value, ";
    }
    echo "\n";
}
$numbers = array('one','two','three','four','five');

// mutate or change array element of definite index
// let us change the element "two" which index is 1

print_array($numbers); // before mutation

$numbers[1]='twelve';

print_array($numbers); // after mutation
    

///                        ///
/// Removing array element ////
///                        ///

//  array_pop() remove the last element of array and return the removed element 
array_list($numbers); // before deletion of last element
$removed_last_element = array_pop($numbers); 
array_list($numbers); // after deletion of last element 
echo "Last removed element is: $removed_last_element \n";

echo PHP_EOL;

// array_shift remove the first array element and return the removed element
array_list($numbers);
$removed_first_element = array_shift($numbers);
array_list($numbers);
echo "first removed element is: $removed_first_element \n";

echo PHP_EOL;


$digits = [1,2,3,4,5,6,7,8,9];
///                        ///
///  Adding array element  ////
///                       ///
array_list($digits);                      
array_push($digits,11); // add elements at the end of array and return number of total elemets in array
array_list($digits);      
array_push($digits,14,23,34);// pushing multiple elements 
array_list($digits);  
$digits[]=100; // we can also add array element at the end in this way             
array_list($digits); 

array_unshift($digits,101); // add element at the begining and return the number of elements in array
array_list($digits);

?>