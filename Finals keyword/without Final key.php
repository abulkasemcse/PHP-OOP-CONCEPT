<?php

   class Furniture {

      function printMessage() {

         echo "I am the function of derived class.";

      }

   }

   class testClass extends Furniture {

      function Message() {

         echo "I am the function of without finals key class.";

      }

   }

   $ob = new testClass;

   $ob->printMessage();

?>