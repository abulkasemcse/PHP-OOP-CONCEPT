<?php

   class Furniture{

      public function __construct(){

         echo "This is the constructor of the parent class.";

      }

   }

   class Sofa extends Furniture{

   }

   // When this object of the

   // derived class is created,

   // the constructor of the 

   // parent class inherited

   // in the derived class

   // will automatically

   // be called.

   $obj = new Sofa();

?> 

