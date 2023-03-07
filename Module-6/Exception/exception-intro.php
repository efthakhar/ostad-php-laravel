<?php


class Student{

    public $age;
    function __construct($age)
    {
        
        if($age<5){

            throw new Exception('student is too young',9900);

        }else if($age>18){

            throw new Exception('too old ',9901);
        }

        $this->age = $age;
    }
}
$s = new Student(33)
// try {
//     $s = new Student(33);
// } catch (Exception $e) {
//     echo $e->getMessage();
// }    


?>