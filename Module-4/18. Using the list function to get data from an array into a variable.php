<?php


$stuent = ['Efthakhar','email@e.com','24'];

// we can assign these array values to different variables as follows:
$name = $stuent[0];
$email = $stuent[1];
$age = $stuent[2];    

echo $name;

// we can do these more in convenient way
list($name,$email,$age) = $stuent;
echo $email;
?>