<?php

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

/* EXERCISE 2
Make class beer that extends from Beverage.*/
class Beer extends Beverage
{
    /*Create the properties name (string) and alcoholpercentage (float).*/
    public string $name;
    public float $alcoholPercentage;

    /*Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.*/
    public function __construct($name, float $alcoholPercentage, $color, $price, $temperature = 'cold')
    {
        parent:: __construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    /*Remember for now we will use properties and methods that can be accessed from everywhere.
    Make a getAlcoholpercentage function which returns the alocoholpercentage.*/
    public function getAlcoholPercentage()
    {
        return "{$this->alcoholPercentage} %";
    }
}

/*Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.*/
/*Also the name equal to Duvel and the alcohol percentage to 8,5%*/
$duvel = new Beer ('Duvel', 8.5, 'blond', 3.5, );


/*TODO: Print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.*/
echo $duvel->getAlcoholPercentage();


/*Make sure that each print is on a different line.
TODO: Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/
