<?php
class Single { // Singleton Pattern
    private static $_instance; // private property

    public static function getInstance() {
         if(!self::$_instance instanceof Single) {
            self::$_instance = new Single();
         }
         return self::$_instance;
    }
    public function __construct() {
        echo "Single Construct! <br>";
    }
    public function __destruct() {
        echo "Single Destruct! <br>";
    }
    function eat() {
        echo "EAT! <br>";
        return $this;
    }
    function sleep() {
        echo "SLEEP! <br>";
        return $this;
    }
    function code() {
        echo "CODE! <br>";
        return $this;
    }
    function repeat() {
        echo "REPEAT! <br>";
        return $this;
    }
}
Single::getInstance()
    ->eat()->sleep()->code()->repeat();
Single::getInstance()->sleep()->eat()->code()->repeat();
Single::getInstance()->eat();
Single::getInstance()->sleep(); 

?>