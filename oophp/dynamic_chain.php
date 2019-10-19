<?php
    // method chain
    class Programmer {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        public function eat($thing) {
            echo "Eat $thing <br>";
            return $this;
        }
        public function sleep($time) {
            echo "Sleep $time <br>";
            return $this;
        }
        public function code($language) {
            echo "Code $language <br>";
            return $this;
        }
        public function repeat() {
            echo "Repeat! <br>";
        }
    }
    $programmer = new Programmer("Shine Htet");
    $programmer->code("C#")->eat("Burger")->sleep(30)->repeat();
    $pro = new Programmer("Aung Thuta");
    $pro->repeat();
    $proTwo = new Programmer("Foo");
    $proTwo->eat("Dan Baut")
        ->sleep(8)
        ->code("PHP")
        ->repeat();
?>