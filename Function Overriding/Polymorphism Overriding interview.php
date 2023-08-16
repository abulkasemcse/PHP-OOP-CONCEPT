<?php

// Base class
class Animal {
    protected $protected = '$name';
    // protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Unknown sound";
    }
}

// Derived classes
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo!";
    }
}

// Using the classes
$dog = new Dog("Dog Sound ");
$cat = new Cat("Cat Sound");
$cow = new Cow("Cow Sound");

$animals = [$dog, $cat, $cow];

foreach ($animals as $animal) {
    echo $animal->name . " is: " . $animal->makeSound() . PHP_EOL;
    Echo "<br>";
}
