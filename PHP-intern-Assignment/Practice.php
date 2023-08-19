// Animal class (parent class)
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "The $this->name makes a generic sound.";
    }
}

// Child classes
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

// Create instances of different animals
$dog = new Dog("Doggy");
$cat = new Cat("Kitty");
$cow = new Cow("MooMoo");

// Store animals in an array
$animals = [$dog, $cat, $cow];

// Make each animal make a sound
foreach ($animals as $animal) {
    echo $animal->makeSound() . "\n";
}