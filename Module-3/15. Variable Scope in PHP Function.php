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
    static $n;
    $n = $n ?? 1;
    $n++;
    echo "$n \n";
    
}
persist_value();
persist_value();
persist_value();
?>