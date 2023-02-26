<?php


/*
    We are learning about php class and oop deeply



    একটা অব্জেক্ট এর বৈশিষ্ট গুলা কে এর property বলে
    অব্জেক্ট এর ফাংশনালিটীগুলাকে এর মেথড বলে
    অবজেক্ট তৈরি হয় ক্লাস কে ইন্টেনশিয়েইট করলে

    অর্থাৎ ক্লাস হলো নীল নকশা বা টেমপ্লেট , আর অবজেক্ট হলো নীল নকশা অনুসারে বানানো বস্তু

    ক্লাস মূলত একি ধর্মী কাজের জন্য ব্যবহৃত ভ্যারিয়েবল ও ফাংশন কে গ্রুপ করে রাখে, 
    তাই ক্লাস কে এক্টী গ্রুপ ও বলা যায়।


    ক্লাসের কোড সমূহ ইউজ করতে হলে সাধারণ ক্লাসের ছাচ অনুসারে একটি অবজেক্ট তৈরি করতে হয়

*/

class Humen{

    public $name;

    function __construct($a)
    {
        echo "I am creaated yahooooooooo \n";
    }

    function sayHi(){
        echo "Hi there. \n";
    }

    function getName()
    {
        echo $this->name."\n";
    }

    function sayName(){

        if(isset($this->name)){
            echo "Hi I am {$this->name}";
        }else{
            echo "Name has not set yet";
        }
        
    }
}
    
$h1 = new Humen('d'); // instantiating a object using Humen class

$h1->sayHi(); // calling method of a instantiated object

$h1->name = "dihab"; // setting property value

$h1->getName(); // getting property value

$h1->sayName();
?>