<?php

// a test class to 

// illustrate the working of

// the static keyword.

class test {

  // define a static function named 

  // myStaticFunction, using the 

  // "static" keyword. 

  public static function myStaticFunction() {

    echo "I am a static function." . PHP_EOL;

  }

}

// to call a static function,

// there is no requirement of creating

// an object.

// a static function can be called by using

// a "scope resolution" operator

// i.e. ::

test::myStaticFunction();

?>