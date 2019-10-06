<?php
abstract class Animal { // can't use direct declare
    public $name;
    public function eat() {
        echo "EAT! <br>";
    }
}
trait Mammal {
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
    use Mammal, Predator;

}
class Cat extends Animal {
    use Mammal;
}
$dog = new Dog();
$dog->name = "Aung Net!";
$dog->eat();
$dog->chaung();
echo $dog->color;
$dog->run();
?>