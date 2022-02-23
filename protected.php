<?php

declare(strict_types=1);

require 'classes.php';

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
    /* EXERCISE 2
    Make class beer that extends from Beverage.*/
    class Beer extends Beverage
    {
        //Exercise 3 Make all properties private.
        /*Exercise 4 Make all properties protected.*/
        /*Create the properties name (string) and alcoholpercentage (float).*/
        protected string $name;
        protected float $alcoholPercentage;

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
        //Exercise 3 Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."*/
        //Make sure that you use the variables and not just this text line.
        private function beerInfo(){
            return "Hi i'm Duvel and have an alochol percentage of '$this->alcoholPercentage' and I have a $this->color color.";
        }
        //Exercise 3 Print this method on the screen on a new line.
        public function printBeerInfo()
        {
            return $this->beerInfo();
        }
    }

    // Exercise 3 After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
    /*Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.*/
    /*Also the name equal to Duvel and the alcohol percentage to 8,5%*/
    $duvel = new Beer ('Duvel', 8.5, 'blond', 3.5, );
    print_r($duvel->color);
    echo "<br>";
    $duvel->color = 'light';
    print_r($duvel->color);
    echo "<br>";

    //Exercise 3 Make all the other prints work without error.
    /*Exercise 4 Make all the other prints work without error without changing the beverage class.*/
    /*Print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.*/
    echo $duvel->getAlcoholPercentage();
    echo "<br>";
    echo $duvel->printBeerInfo();

/*USE TYPEHINTING EVERYWHERE!
*/