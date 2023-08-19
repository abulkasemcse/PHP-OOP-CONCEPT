<?php
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "The $this->name makes a generic sound.";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "The $this->name barks.";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "The $this->name meows.";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "The $this->name moos.";
    }
}

$dog = new Dog("Doggy");
$cat = new Cat("Kitty");
$cow = new Cow("MooMoo");

$animals = [$dog, $cat, $cow];

foreach ($animals as $animal) {
    echo $animal->makeSound() . "\n";
    echo "<br>";
}

?>