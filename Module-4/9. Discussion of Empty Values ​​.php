<?php




// isset() return true if the variable is set or it is not null
// case 1: $var; // return false
// case 2: $var = null; // return false
// other cases: return true

$var;
echo isset($var); 

//On the other hand the empty() function checks if the variable has an empty value empty string, 0, NULL or False. 

$var2 = ''; 

echo empty($var2); 
// return true for: empty string,
//                  NULL
//                  False           
//                  0


?>