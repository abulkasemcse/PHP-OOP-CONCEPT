<?php

// Define the base class

class Furniture {

    private $price = "We have a fixed price of 50000";

    private function show()

    {

        echo "This is private method of base class";

    }

}

//  define the derived classes

class Sofa extends Furniture {

    function printPrice()

    {

        echo $this->price;

    }

}

// create the object of the

// derived class

$obj= new Sofa;

// this line is trying to 

// call a private method.

// this will throw error

$obj->show();

// this will also throw error

$obj->printPrice();

?>

