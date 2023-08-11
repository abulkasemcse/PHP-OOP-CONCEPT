<?php

// Define the base class

class Furniture {

    public $price = "We have a fixed price of 50000";

    function printMessage() {

        echo $this->price;

        echo PHP_EOL;

    }

}

//  define the derived classes

class Sofa extends Furniture {

    function print(){

        echo $this->price;

        echo PHP_EOL;

    }

}

// create the object of the

// derived class.

$obj= new Sofa;

// call the functions

echo $obj->price;

echo PHP_EOL;

$obj->printMessage();

$obj->print();

?>

