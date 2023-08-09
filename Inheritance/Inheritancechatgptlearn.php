<?php 
class Vehicle {
    protected $brand;
    protected $year;

    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function getDetails() {
        return "{$this->year} {$this->brand}";
    }
}

class Car extends Vehicle {
    private $model;

    public function __construct($brand, $year, $model) {
        parent::__construct($brand, $year); // Call parent class constructor
        $this->model = $model;
    }

    public function getDetails() {
        return parent::getDetails() . " (Car: {$this->model})";
    }
}

class Motorcycle extends Vehicle {
    private $type;

    public function __construct($brand, $year, $type) {
        parent::__construct($brand, $year);
        $this->type = $type;
    }

    public function getDetails() {
        return parent::getDetails() . " (Motorcycle: {$this->type})";
    }
}

// Create instances
$car = new Car("Toyota", 2023, "Camry");
$motorcycle = new Motorcycle("Harley-Davidson", 2022, "Cruiser");

// Get details
echo $car->getDetails(); // Output: 2023 Toyota (Car: Camry)
echo $motorcycle->getDetails(); // Output: 2022 Harley-Davidson (Motorcycle: Cruiser)

?>
