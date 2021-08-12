<?php
/*
Interface methods are by default abstract.
Interfaces can not be instantiated.
Interface can not have constructor method.
Class implementing interface must be compatible with
the methods of interface.
*/

interface Inter{
    function __construct($x,$y);
    public function sum();
    function negation();
    function multiplication();
    function divison();
}
class Hello implements Inter{
    private $x;
    private $y;
    private $result;
    public function __construct($a,$b){
        $this->x = $a;
        $this->y = $b;
    }
    public function sum(){
        $this->result = $this->x + $this->y;
        echo "Sum of two number is ".$this->result;
    }
    public function negation(){
        $this->result = $this->x - $this->y;
        echo "Negation of two number is ".$this->result;
    }
    public function multiplication(){
        $this->result = $this->x * $this->y;
        echo "Multiplication of two number is ".$this->result;
    }
    public function divison(){
        $this->result = $this->x / $this->y;
        echo "Divison of two number is ".$this->result;
    }
}
$obj = new Hello(20,30);
$obj->sum();
echo "<br>";
$obj->divison();
?>