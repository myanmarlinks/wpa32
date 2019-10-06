<?php
declare(strict_types=1);
class Cat {
    private $name;
    
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    private $data = [];
    public function __set($key, $value) {
        $this->data[$key] = $value;
    }
    public function __get($key) {
        if(array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            trigger_error("Key does not exist!", E_USER_ERROR);
        }
    }
}
$cat = new Cat("Shwe War");
echo $cat->getName();
$cat->color = "Green"; // late binding (or) lazy loading
// $cat->dance();
echo $cat->color . "<br>";
echo $cat->bar;
$catTwo = new Cat("Foo");
echo $catTwo->getName();
?>