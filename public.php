<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* EXERCISE 5
Copy the class of exercise 1.*/
class Beverage
{
    /*Change the properties to private.*/
    /*Create the properties color (string), price (float) and temperature (string) and also foresee a construct.*/
    private $color;
    private $price;
    private $temperature;

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

    public function getTemperature()
    {
        echo $this->temperature;
    }

    /*Change the price to 3.5 euro and print it also on the screen on a new line.*/
    public function changePrice()
    {
        $this->price = ('3.5');
        echo $this->price;
    }
}
$cola = new Beverage ('black', 2, 'cold');

echo $cola->getInfo();
echo $cola->getTemperature();
$cola->changePrice();
/*Fix the errors without using getter and setter functions.*/

