<?php


// return types of php function 
// int
// float
// bool
// string
// array
// callable
// interfaces



// without type hinting
function getFactorial( $num)
{
    if(gettype($num)!="integer"){
        return "invalid argument";
    }

    $result = 1;

    for ($i = $num; $i > 1; $i--) {
        $result *= $i;
    }

    return $result;
}


// with type hinting
function Factorial(int $num) : int
{
    $result = 1;

    for ($i = $num; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}


echo Factorial(7);