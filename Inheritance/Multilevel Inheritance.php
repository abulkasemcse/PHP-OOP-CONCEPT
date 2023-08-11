<?php

// base class named "Furniture"

class Furniture {

    public function totalCost() {

        return  ' total furniture cost: 60000';

    }

}

// derived class named "Table"

// inherited form class "Furniture"

class Table extends Furniture {

    public function tableCost() {

        return  ' table cost: 45000';

    }

}

// derived class named "Study_Table"

// inherited form class "Table"

class Study_Table extends Table {

    public function studyTableCost() {

        return  ' study table cost: 60000';

    }

    public function priceList() {

        echo '1. ' .$this->totalCost() . PHP_EOL;

        echo '2. ' .$this->tableCost() . PHP_EOL;

        echo '3. ' .$this->studyTableCost() . PHP_EOL;

    }

}

// creating object of 

// the derived class

$obj = new Study_Table();

$obj->priceList();

?>

