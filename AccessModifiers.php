<?php
/*
The moment we instantiate an object constructor function
runs.
In the below example you can notice that initially the
properties where not assigned.
Later on call to line 31 all the properties are assigned.
Which you can notice in the output. 
*/
/*

class AccessModifiers{
    public $name;
    public $age;
    public $gender;
    public function __construct(){
        echo "<h1>Access Modifiers</h1> <br>";
        echo "<h2>My name is</h2> ".$this->name."<br>";
        echo "<h3>His age is</h3> ".$this->age."<br>";
        echo "<h4>He is</h4> ".$this->gender;
    }
    public function test(){
        echo "<h1>Access Modifiers</h1> <br>";
        echo "<h2>My name is ".$this->name."</h2><br>";
        echo "<h3>My age is ".$this->age."</h3><br>";
        echo "<h4>I am ".$this->gender."</h4>";
    }
}
// Instantiate an object
$obj = new AccessModifiers();
$obj->name = "Hanuman";
$obj->age = 100;
$obj->gender = 'lord';
$obj->test();

*/

/*

Properties with Protected access modifiers can be called from child class.
Properties with Private access modifiers can not be called directly from child class.
Properties with private access modifiers can be set in child class.

*/
Class Access{
    private $n;
    protected $x;
    public function __construct($y,$x){
        $this->n = $y;
        $this->x = $x;
        echo "<h1>".$this->n."</h1>";
        echo "<h1>".$this->x."</h1>";
    }
}
Class Modifier extends Access{
    public function test($m){
        echo "<p>This is property of parent class ".$this->x."</p>";
    }
}
// $test = new Access("Hello From Parent Class","Protected Variable");
// $test->x = "Throw Error"; //This is an error - cannot access property
$child = new Modifier("hey","hi");
$child->test("hmm");
?>