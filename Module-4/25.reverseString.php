<?php


$string = "Bangladesh";
echo $string;
echo "\n";
echo strrev($string); // reverse the string
echo "\n";   

// another way with for loop
$length = strlen($string);
$reversed_string = '';
for($i=$length-1;$i>=0;$i--){
    $reversed_string.=$string[$i];
}

echo $reversed_string;
?>