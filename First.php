<?php 
/* Note : 
    1) constructor function cannot be private.
    2) destructor function cannot be private.
    3) Private variable & method can be accessed within the class only.
    4) Private & Protected variable & method can not be accessed outside the class.
    5) Protected variable and method can be accessed within the class and the class that extends it.
    6) Public properties and methods can be accessed within the class and outside the class.
    7) Static variable and methods can be called inside method using scope resolution operator like self::$variableName
    whereas in child class like parent::$variableName. Outside the classe can be called as className::$variable or method()
    8) If a class has all the method and properties static then the class is also static.
    9) Function inside class is known as method.
    10) Learn more in next class.
*/
class First{
    private $name;
    protected $age;
    // private static $gender;
    public static $gender;
    protected static $profession;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
        self::genderIs();
        echo "Hello ".$this->name.".<br> Your age is ".$this->age."<br>";  
    }
    public static function genderIs(){
        self::$gender = "male";
        echo "Your gender is ".self::$gender."<br>";
    }
    public static function profession($profession){
        self::$profession = $profession; 
        echo "Thanks for sharing your profession ".self::$profession." with us. <br>";
    }
    public function __destruct(){
        echo "This function will run in the end";
    }
}
First::$gender = "female";
First::profession("Engineer");
$obj = new First("Ram",22);
// First::genderIs("male");
?>