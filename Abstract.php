<?php
/*
Abstract class variable need not to be abstract
Method name of the abstract class need not to have abstract keyword in the child class
Abstract class can not be instantiated 
Every child class extending abstract class needs to implement abstract method
*/
abstract class Abstracts{
    // abstract protected $name; // properties cannot be declared abstract
    protected $name;
    private $age;
    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
        echo "My name is ".$this->name. ". I am ".$this->age." years old. <br>";
    }
    abstract function test();
    public function random(){
        echo "This is a random function in abstract class <br>";
    }
}
class Child extends Abstracts{
    function test(){
        echo "Implementation of abstract function in child class <br>";
    }
}
abstract class NextChild extends Abstracts{
    public function fun(){
        echo "This is fun";
    }
}
// $obj1 = new Abstracts();
// Cannot instantiate abstract class.
$obj = new Child("Ramu Kaka",22);
$obj->test();
$obj->random();
// $obj2 = new NextChild();
?>