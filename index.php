<?php
// defined custom class 
class Fruit 
{
    // properties 
    public $name;
    public $color;

    // method to set name
    public function set_name($name)
    {
        $this->name = $name;
    }
    
    // get name method
    public function get_name()
    {
        return $this->name;
    }

    // method to set color
    public function set_color($color)
    {
        $this->color = $color;
    }
    
    // get color method
    public function get_color()
    {
        return $this->color;
    }
}

// define the object 
$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Blue");

// banana
$banana = new Fruit();
$banana->set_name("Banana");
$banana->set_color("Green");

// result 
echo $banana->get_name();
echo "<br/>";

echo $apple->get_name();
echo "<br/>";
echo "<br/>";echo "<br/>";
echo $banana->get_color();
echo "<br/>";
echo $apple->get_color();
