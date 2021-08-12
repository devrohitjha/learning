<?php
/*
Inheritance : Child class inherits all the properties
and method from parent class.
Only protected and public properties and method can be
extended to the child class.
*/
class Inherit{
    protected $x;
    protected $y;
    protected $sumresult;
    protected $negresult;
    protected $mulresult;
    public function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    protected function sum(){
        $this->sumresult = $this->x + $this->y;
        echo $this->sumresult."<br>";
    }
    protected function negation(){
        $this->negresult = $this->x - $this->y;
        echo $this->negresult."<br>";
    }
    protected function multiplication()
    {
        return $this->mulresult = $this->x * $this->y;
    }
}
class Child extends Inherit{
    public function message(){
        $this->sum();
        $this->negation();
       echo $this->multiplication();
    }
}
$obj = new Child(20,30);
$obj->message();
?>