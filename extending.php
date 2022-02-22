<?php

declare(strict_types=1);

class Beverage
{
    public $color;
    public $price;
    public $temperature;

    public function __construct($color, $price, $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        return "{$this->temperature}, {$this->color}";
    }
}

$cola = new Beverage ('black', 2, 'cold');

echo $cola->getInfo();

/* EXERCISE 2
Make class beer that extends from Beverage.*/
class Beer extends Beverage
{
    /*TODO: Create the properties name (string) and alcoholpercentage (float).*/

}


/*TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.*/


/*Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholpercentage function which returns the alocoholpercentage.*/


/*TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.*/


/*TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%*/


/*TODO: Print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.*/

/*Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/
