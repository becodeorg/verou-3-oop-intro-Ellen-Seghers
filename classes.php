<?php

/* EXERCISE 1
Create a class beverage.*/
class Beverage
{

    /*Create the properties color (string), price (float) and temperature (string) and also foresee a construct.*/
    public $color;
    public $price;
    public $temperature;

    /*Have a default value "cold" in the construct for temperature.*/
    public function __construct($color, $price, $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    /*Remember for now we will use properties and methods that can be accessed from everywhere.
    Make a getInfo function which returns "This beverage is <temperature> and <color>."*/
    public function getInfo()
    {
        return "{$this->temperature}, {$this->color}";
    }
}

/*Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.*/
$cola = new Beverage ('black', 2, 'cold');

/*Print the temperature on the screen.*/
echo $cola->getInfo();

/*USE TYPEHINTING EVERYWHERE!
*/

?>