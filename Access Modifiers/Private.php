<?php

// Define the base class

class Furniture {

    protected $price1 = 1000;

    protected $price2 = 2000;   

    // Subtraction Function

    function total()

    {

        echo $sum = $this->price1 + $this->price2;

        echo PHP_EOL;

    }   

}

// define the derived classes

class Sofa extends Furniture {

    function printInvoice() 

    {

        $tax = 100;

        echo $sub = $this->price1 + $this->price2 + $tax;

        echo PHP_EOL;

    }

}

$obj= new Sofa;

$obj->total();

$obj->printInvoice();

?>

