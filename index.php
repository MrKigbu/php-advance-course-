<?php
//defined custom class 
class Fruit 
{
    //properties 
    public $name;
    public $color;

    //method
    public function set_name ($name)
    {
        $this->name = $name;
    }
    
    //get name method
    public function get_name ()
    {
        return $this->name;
    }
}

//define the object 
$apple = new Fruit ();
$apple ->set_name ("apple");

//banana
$banana = new Fruit ();
$banana ->set_name("Banana");

//result 
echo $banana->get_name();
echo"<br/>";
echo $apple->get_name();
