<?php

// base class named "Furniture"

class Furniture {

    public function Furniture() {

        echo 'This class is Furniture ' . PHP_EOL; 

    } 

}

// derived class named "Sofa"

class Sofa extends Furniture {  

}

// derived class named "Sofa"

class Cupboard extends Furniture {  

}

// creating objects of 

// derived classes

// "Sofa" and "Cupboard"

$s = new Sofa();

$c = new Cupboard();

?>