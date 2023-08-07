<?php
class subject{
    public function __construct() {

        echo 'I am the constructor' .PHP_EOL;

    }
    public function subject_field($field) {

        echo 'This subject is specialised in ' . $field .PHP_EOL;

    }   

}

// declare an object of the class 

// named obj1 using the "new" keyword.

// as soon as an object is created,

// the default constructor is automatically called.

$obj1 = new subject;        // here the default constructor of

                            // the class subject is called 

                            // automatically.

// calling the function subject_field

// by passing it "Mathematics" as an argument
echo "<br>";

$obj1->subject_field("Mathematics");

?>


