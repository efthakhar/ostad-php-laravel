<?php


// to get info of a variable we use var_dump function

$name = "efthakhar bin alam";
var_dump($name); // printing info of one variable

$name2 ="dihab";
var_dump($name,$name2); // printing info of multiple variables 

/* 
Data Types in PHP:
=================

Integer
Double/float 
Boolean
Null
String
Array
Object
Resource

*/

// Printing multiple variable in one time and formatting them
$firstName = 'efthakhar';
$lastName  = "dihab";

printf("My %s name is %s %s \n","Full",$firstName,$lastName);
printf("My %s name in uppercase is %s %s \n","Full",strtoupper($firstName),strtoupper($lastName));



?>


