<?php

interface Furniture {

  public function printPrice();

  public function printItem();

}

class Sofa implements Furniture {

  public function printPrice() {

    echo "Price of Sofa is: 65000" . "\n";

  }

  public function printItem() {

    echo "Other items are: Table and Cupboard". "\n";

  }

}

$obj = new Sofa;

$obj->printPrice();

$obj->printItem();

?>