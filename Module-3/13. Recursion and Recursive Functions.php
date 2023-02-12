<?php
// recursive function

function print_num($start,$end,$step=1)
{
    if($start>$end){
        return;
    }

    echo "$start \n";

    $start= $start+$step;

    print_num($start,$end,$step);
}

//print_num(3,30,10);

//  0 1 1 2 3 5 8 13 ......


function fibonacci($n,$first,$second){

    if($n<=0){
        return;
    }

    echo "$first  ";
    $temp = $first;
    $first = $second;
    $second = $temp + $second;

    $n--;
    fibonacci($n,0,1);

}

fibonacci(15,$first,$second);


?>