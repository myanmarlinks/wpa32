<?php
    
class Dog {
    public $name;
    private $nickName;
    public function bark() {
        echo "Woof!<br>";
    }
    // static method
    public static $color = "white";
    public static function warning() {
        echo "Warning Dog Bite <br>";
    }
    public function __construct() { // Megic Method
        echo __CLASS__ . "Contruct! <br>";
    }
    public function __destruct() { // Method Method
        echo __CLASS__ . "Destroy! <br>";
    }
}
Dog::warning(); // scope resolution operator
echo Dog::$color . "<br>";
Dog::$color = "blue";
echo Dog::$color . "<br>";
$dog = new Dog;
$dog->warning();
$dog->name = "Aung Net";
$dog->color = "red";
echo $dog->color . "<br>";
$dog->bark();

    
?>