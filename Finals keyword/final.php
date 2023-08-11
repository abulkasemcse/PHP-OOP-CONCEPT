<?php

   final class Furniture {

      final function displayMessage() {

         echo "I am a final class. You can not inherit my properties!";

      }

      function print() {

         echo "I am the Furniture class function.";

      }

   }

   class testClass extends Furniture {

      function show() {

         echo "I am the test class function.";

      }

   }

   $obj = new testClass;

   $obj->show();

?>

