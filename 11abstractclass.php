<?php
abstract class a 
{
    abstract public function printdata();// define method
}
class b extends a //here we attach a class using the extends keyword//
{
    public function printdata()
    {
        echo "Classes extending an abstract class 
        must implement all of the abstract methods 
        defined in the abstract class.";
    }
}
$obj= new b();
$obj->printdata();
?>