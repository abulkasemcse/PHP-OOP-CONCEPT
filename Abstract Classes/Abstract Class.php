<?php

// define an abstract class

abstract class Furniture {

  public $name;

  public function __construct($name) {

    $this->name = $name;

  }

  // abstract method of the

  // abstract class.

  // It will be defined later in the 

  // child clases.

  abstract public function printType() : string;

}

// Derived classes are defined now

class Sofa extends Furniture {

  public function printType() : string {

    return "I am a $this->name!";

  }

}

class Table extends Furniture {

  public function printType() : string {

    return "I am a $this->name!";

  }

}

class Cupboard extends Furniture {

  public function printType() : string {

    return "I am a $this->name!";

  }

}

// Creating instances of the

// derived classes.

$Sofa = new Sofa("Sofa");

echo $Sofa->printType();

echo PHP_EOL;

$Table = new Table("Table");

echo $Table->printType();

echo PHP_EOL;

$Cupboard = new Cupboard("Cupboard");

echo $Cupboard->printType();

echo PHP_EOL;

?>

