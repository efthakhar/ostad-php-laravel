<?php


$name = 'dihab';

function print_global()
{
    global $name;
    echo $name;
    echo "\n";
    // or
    echo $GLOBALS['name'];
    echo "\n";
    // moving a variable from local scope to global scope
    global $hero ;
    $hero = "super man";
}

print_global();    


echo "$hero \n";

////// Static scope

function persist_value()
{
    static $n = 5;
    //$n = $n ?? 1;
    $n++;
    echo "$n \n";
    
}
persist_value();
persist_value();
persist_value();


echo "============== \n";

function sum($x,$y)
{   
    $x = 0;
    $y = 0;
    echo "x = {$x} and y = {$y}";
}
sum(1,2);
?>