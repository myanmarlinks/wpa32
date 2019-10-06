<?php
class Parrot {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public static function __callStatic($method, $args) {
        var_dump($method);
        var_dump($args);
    }
    public function __call($method, $arguments){
        var_dump($method);
        var_dump($arguments);
    }
}
Parrot::dance("Yue Yue Mue Mue", 1); // static lazy loading
$parrot = new Parrot("Aung Ba");
$parrot->talk("Kyun Kyun Kyin Kyin", 67, 34); // dynamic lazy loading
?>