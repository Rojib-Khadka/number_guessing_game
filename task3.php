<?php
interface Resizable {
    public function resize();
}

abstract class Shape implements Resizable {
    // Abstract method that must be implemented by subclasses
    abstract public function getArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementing the getArea method
    public function getArea() {
        $area = pi() * pow($this->radius, 2);
        echo "Area of the circle: " . $area . "\n";
    }

    // Implementing the resize method
    public function resize() {
        $this->radius *= 1.1; // Example of resizing by increasing radius by 10%
        echo "Resized Circle: New radius is " . $this->radius . "\n";
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    // Implementing the getArea method
    public function getArea() {
        $area = pow($this->side, 2);
        echo "Area of the square: " . $area . "\n";
    }

    // Implementing the resize method
    public function resize() {
        $this->side *= 1.1; // Example of resizing by increasing side by 10%
        echo "Resized Square: New side length is " . $this->side . "\n";
    }
}

// Creating objects and calling methods
$circle = new Circle(5);
$square = new Square(4);

$circle->getArea();
$square->getArea();

$circle->resize();
$square->resize();

$circle->getArea();
$square->getArea();
?>

