<?php


$first_num = 0;
$second_num = 1;


for($i=0;$i<10;$i++){
    
   echo $first_num."   ";

   $temp = $second_num;
   $second_num = $first_num + $second_num;
   $first_num = $temp;
   
   
}

//  0 1  1 2 3 5 8 13 21 34 55 
    


?>