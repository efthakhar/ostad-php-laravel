<?php


// to include class file in php we can use spl_autoload_register()
// spl_autoload_register() take a callback which 
// in this call back function we define how classes will be included 
spl_autoload_register(function($class)
{
    include_once('classes/'.$class.'.php');
});

$o1 = new A();  


?>