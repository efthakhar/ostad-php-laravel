<?php


function test(array $arr,int $sum)
{
    $possible = false;

    foreach($arr as $i){

        foreach($arr as $j){

            if($i==$j){
                continue;
            }
            if(($j+$i) == $sum){
                $possible = true;
            }

        }
    }

    return $possible;
}

if(test([5,7,1,2,8,4,3],8)==true) {

   echo "pair exist";
}else{
    echo "pair does not exist";
}


?>

