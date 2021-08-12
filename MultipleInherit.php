<?php
/*
To implement multiple inheritance trait 
help to achieve it. 
*/
trait first{
    function test(){
        echo "This is a trait test";
    }
    function sayhello(){
        echo "Hello from first \n";
    }
}
trait second{
    protected function hello(){
        echo "This is a second trait";
    }
    public function sayhello(){
        echo "Hello from second \n";
    }
}
class Multiple{
    use first, second{
        second::sayhello insteadof first; // to resolve conflict
        first::sayhello as newhello;
        second::hello as public helloone;
    }
    // Over writing the test function of trait
    public function test()
    {
        echo "This is a multiple class method";
    }
}
$obj = new Multiple();
$obj->helloone();
echo "<br>";
$obj->test();
echo "<br>";
echo $obj->sayhello();
echo "<br>";
echo $obj->newhello();
?>