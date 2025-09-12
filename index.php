<?php
// Abstract parent class
abstract class Car {
    public $name;
    public $number;

    // constructor
    public function __construct($name, $number) {
        $this->name = $name;
        $this->number = $number;
    }

    // abstract methods (must be implemented in child classes)
    abstract public function intro(): string;
    abstract public function int(): int;
}

// Child class Audi
class Audi extends Car {
    public function intro(): string {
        return "Choose German Quality! I'm a $this->name!";
    }
    public function int(): int {
        return $this->number;
    }
}

// Child class Volvo
class Volvo extends Car {
    public function intro(): string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
    public function int(): int {
        return $this->number;
    }
}

// Child class Citroen
class Citroen extends Car {
    public function intro(): string {
        return "French Extravagance! I'm a $this->name!";
    }
    public function int(): int {
        return $this->number;
    }
}

// create objects from the child classes 
$audi = new Audi("Audi", 50);
$volvo = new Volvo("Volvo", 2);
$citroen = new Citroen("Citroen", 45);

// get the values 
echo $audi->intro();
echo "<br>";
echo $volvo->intro();
echo "<br>";
echo $citroen->intro();
echo "<br>";

// get the int values 
echo $audi->int();
echo "<br>";
echo $volvo->int();
echo "<br>";
echo $citroen->int();
?>
