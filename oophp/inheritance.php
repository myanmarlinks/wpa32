<?php
abstract class Animal { // can't use direct declare
    public $name;
    public function __construct($name) {
        $this->name = $name;    
    }
    public function eat() {
        echo "EAT! <br>";
    }
}
trait Mammal {
    // Mixin
    public $color = "red <br>";
    public function run() {
        echo "RUN! <br>";
    }
}
trait Predator {
    public function chaung() {
        echo "CHAUNG! <br>";
    }
}
class Dog extends Animal {  
    public function __construct($name) {
        parent::__construct($name);
    }  
    use Mammal, Predator;

}
class Cat extends Animal {
    use Mammal;
}
$dog = new Dog("Aung Net");
$dog->eat();
$dog->chaung();
echo $dog->color;
$dog->run();
?>