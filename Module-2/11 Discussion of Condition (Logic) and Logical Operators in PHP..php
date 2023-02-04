<?php

$n = 35;

if($n>9){
    echo "number is 19"; // after matching one condition next conditions will not be checked
}elseif($n>3){
    echo "number is 35";
}else{
    echo "no match";
}

    
$word = "dihab";
if('sihab'== $word){ // always keep  static value on the left side of ==
    echo $word;
}

?>