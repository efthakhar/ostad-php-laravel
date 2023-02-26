<?php


class A{
    function __construct()
    {
        self::getName();
        static::getName();
    }

    static function getName()
    {
        echo "Class A \n";
    }
}

class B extends A{

    static function getName()
    {
        echo "class B \n";
    }
}

$obj = new B() ;

?>