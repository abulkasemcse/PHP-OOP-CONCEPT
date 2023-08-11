<?php

   class Furniture {

      public function __construct(){

         echo "I am the constructor of the parent class.\n";
         echo "<br>";
         echo "<br>";

      }

   }

   class Sofa extends Furniture {

      public function __construct(){

        // call the constructor

        // of the parent class

        // using the :: operator

         parent::__construct();

         echo "I am the constructor of the derived class.\n";

      }

   }

$obj = new Sofa();

?>

