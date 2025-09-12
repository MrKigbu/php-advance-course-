<?php
//define static method 
class Greeting 
{
    // public function __construct($num1, $num2)
    // {
    //     echo self::addNumber($num1, $num2);
   // }
    protected  static function welcome($msg)
    {
        echo $msg;
    }
    
    //add number 
    public static function addNumber ($num1, $num2)
    {
        return $num1 + $num2;
    }
}

class NewArea extends Greeting {
    public static function addnewdata($msg)
    {
        Greeting::welcome ($msg);
    }
}
NewArea::addnewdata("Hello world, I am from keffi");
//sammy na you do this one oh

// class domain {
//     protected static function getWebsiteName () {
//         return "AQskill.com";
//     }
// }
// class domainAQ extends domain {
//     public $websiteName;
//     public function __construct() {
//         $this->getWebsiteName = parent ::getWebsiteName();
//     }
// }
// $domainAQ = new domainAQ;
// echo $domanW3->getWebsiteName;

//call static method 
// Greeting::welcome();
// echo Greeting::addNumber(1,2);

// Define trait
// trait Message1 {
//     public function msg1() {
//         echo "OOP is fun!<br>";
//     }

//     // Addition
//     public function addnumber($num1, $num2) {
//         return $num1 + $num2;
//     }
// }
// //trait 2
// trait message2
// {

//     public function msg2()
//     {
//         echo "OOP reduces code duplication!";
//     }
// }
// // Class Welcome
// class Welcome {
//     use Message1, Message2;

//     // Multiply number
//     public function multiplynumber($num1, $num2) {
//         return $num1 * $num2;
//     }
// }

// // Another class using the same trait
// class TestingClass {
//     use Message1;

//     // Multiply number
//     public function multiplynumber($num1, $num2) {
//         return $num1 * $num2;
//     }
// }

// // Create objects
// $obj = new Welcome();
// $obj->msg1();
// echo $obj->addnumber(10, 20);
// echo "<br>";
// echo $obj->multiplynumber(10, 20);
// echo "<br><br>";
// $obj->msg2();

// $obj2 = new TestingClass();
// $obj2->msg1();
// echo $obj2->multiplynumber(10, 20);



// ---------------- INTERFACE DEMO ----------------
// interface Animal {
//     public function makesound();
//     public function eat(): string;
// }

// class Cat implements Animal {
//     public function makesound() {
//         echo "Meow<br>";
//     }

//     public function eat(): string {
//         return "Cat is eating<br>";
//     }
// }

// // Child class Dog
// class Dog implements Animal {
//     public function makesound() {
//         echo "Woof<br>";
//     }

//     public function eat(): string {
//         return "Dog is eating<br>";
//     }
// }

// // Child class Mouse
// class Mouse implements Animal {
//     public function makesound() {
//         echo "Squeak<br>";
//     }

//     public function eat(): string {
//         return "Mouse is eating<br>";
//     }
// }

// // Make instances of the classes
// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();

// // Add objects to an array
// $animals = array($cat, $dog, $mouse);

// // Tell the animals to make a sound and eat
// foreach ($animals as $animal) {
//     $animal->makesound();
//     echo $animal->eat();
// }
?>
