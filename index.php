<?php
// defined custom class 
class Fruit 
{
    // properties 
    public $name;
    protected $color;
    private $weight;
   // public function __construct($name, $color)
   // {
   //     $this->name = $name;
  //      $this->color = $color;
  //  }
    
    
    // get name method
    public function get_name()
    {
       return $this->name;
   }

   //set name 
   protected function set_name ($name)
   {
   $this->$name= $name; 
   }

   
    
    // get color method
    private function get_color()
    {
        return $this->color;
    }
    //destruct 
   // public function __destruct()
   // {
   //     echo "The fruit is {$this->name} and the color is {$this->color}.";
   // }
}

// define the object 
$apple = new Fruit();
//$apple->name= "Apple";
//echo $apple->name;
//$apple->color = "New Color";
//$apple->weight = "12kg";
$apple->set_name("Apple");
$apple->get_name();
$apple->get_color();

// banana
//$banana = new Fruit("Banana2", "Green");

// result 
//echo $banana->get_name();
//echo $banana->name;
//echo "<br/>";

//echo $apple->get_name();
//echo $apple->name;
//echo "<br/>";
//echo "<br/>";echo "<br/>";
//echo $banana->get_color();
//echo $banana->color;
//echo "<br/>";
//echo $apple->get_color();
//echo $apple->color;
