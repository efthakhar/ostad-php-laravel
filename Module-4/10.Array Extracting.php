<?php


// array_splice details exploration

$n = [1,2,3,4,5,6];

$m = array_splice($n,4,2);

print_r($n);
    
print_r($m);

$digits = [1,2,3,4,5,6,7,8,9];

$d = array_slice($digits,5,null,true);
print_r($d);
print_r($digits);
?>