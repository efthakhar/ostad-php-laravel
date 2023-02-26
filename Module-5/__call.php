<?php


class A{
    function __call($name, $arguments)
    {
        // if($name = 'getName'){
        //     echo "{$arguments[0]}";
        // }
        echo "hi dihab \n";
    }

    static function __callStatic($name, $arguments)
    {
        print_r($arguments);
    }
}

    
(new A())->getName('name is efthakhar');

A::getHero('sfdfs','5');

?>