<?php

// base class named "Furniture"

class Furniture {

    var $cost = 1000;

    public function printName($name) {

        echo 'Class is: Furniture & name of furniture is: ' . $name . PHP_EOL; 

    } 

}

// derived class named "Sofa"

class Sofa extends Furniture {

    public function printName($name) {

        echo 'Class is: Sofa & name of furniture is: ' . $name . PHP_EOL;

        // this class can access 

        // data member of its parent class.

        echo 'Price is: ' . $this->cost . PHP_EOL;

    }

}

$f = new Furniture();

$s = new Sofa();

$f->printName('Table'); 

$s->printName('Sofa'); 

?>