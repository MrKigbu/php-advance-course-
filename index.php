<?php
class Fruit {
    public $name;
    public $color;

    // constructor
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    // method
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
    public function message()
    {
        echo $this->name;
        echo "<br/>";
        echo $this->color;
    }

    public function addition($num1, $num2)
    {
        echo "The sum is " . ($num1 + $num2) . "<br>";
    }
}

// create an object of Strawberry (not just Fruit)
$strawberry = new Strawberry("Strawberry", "Red");

// call methods
$strawberry->message();
$strawberry->addition(5, 10);
//$strawberry->intro();
echo $strawberry->name;
?>
