<?php
// ---------------- INTERFACE DEMO ----------------
interface Animal {
    public function makesound();
    public function eat(): string;
}

class Cat implements Animal {
    public function makesound() {
        echo "Meow<br>";
    }

    public function eat(): string {
        return "Cat is eating<br>";
    }
}

// Child class Dog
class Dog implements Animal {
    public function makesound() {
        echo "Woof<br>";
    }

    public function eat(): string {
        return "Dog is eating<br>";
    }
}

// Child class Mouse
class Mouse implements Animal {
    public function makesound() {
        echo "Squeak<br>";
    }

    public function eat(): string {
        return "Mouse is eating<br>";
    }
}

// Make instances of the classes
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

// Add objects to an array
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound and eat
foreach ($animals as $animal) {
    $animal->makesound();
    echo $animal->eat();
}
?>
