<!-- #With the final keyword (Will throw an error, to prevent method overriding) -->
<?php

   class Furniture {

      final function printMessage() {

         echo "I am the function of derived class.";

      }

   }

   class testClass extends Furniture {      

      function printMessage() {

         echo "I am the function of derived class.";

      }

   }  

   $ob = new testClass;

   $ob->printMessage();

?>