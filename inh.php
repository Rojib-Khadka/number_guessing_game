<?php
class Car {
    public $brand;
    public $year;

    // Constructor with parameters
    public function __construct($brand, $year ) {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function displayInfo() {
        echo "Brand: " . $this->brand . ", Year: " . $this->year . "<br>";
    }
}

// Create objects
$car1 = new Car("Toyota", 2020);
$car2 = new Car("Tesla",2018);

$car1->displayInfo(); // Output: Brand: Toyota, Year: 2020
$car2->displayInfo(); // Output: Brand: Unknown, Year: 0
?>
