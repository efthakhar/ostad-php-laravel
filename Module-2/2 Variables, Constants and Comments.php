<?php

// Php variables are mutable. You can change the variable value at any time

$task = 'read';
echo $task;
echo "\n";

$task = "write";
echo $task;
echo "\n";

// using variable value in string
echo "our variable's value is {$task} \n"; 
echo "our variable's value is ".$task; 
echo "\n";

// defining Conatant which is immutable

define("PI",3.1416);

// echo constant
echo constant("PI");
echo "\n";
echo PI;

// echo constant in staring
echo "constant value is ".PI;
echo "\n";

$constant = "constant";

echo "constant value in another way {$constant('PI')}"



?>

