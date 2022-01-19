<?php

class Figure {

    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    function getType()
    {
        return $this->type;
    }

    public function perimeter()
    {

    }
    public function area()
    {

    }
}

class Circle extends Figure {

    protected $radius;
    const PI = 3.1416;

    public function __construct($radius)
    {
        $this->type = 'Круг';
        $this->radius = $radius;
    }

    public function getFigure()
    {
        return 'Фигура ' . $this->getType() . ', площадь: ' . $this->area() . ', периметр: ' . $this->perimeter();
    }

    public function perimeter()
    {
        return 2 * $this->radius * self::PI;
    }

    public function area()
    {
        return self::PI * ($this->radius ** 2);
    }
}

class Triangle extends Figure {

    protected $a;
    protected $b;
    protected $c;

    public function __construct($a, $b, $c)
    {
        $this->type = 'Треугольник';
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getFigure()
    {
        return "Фигура \n" . $this->getType() . ', площадь: ' . $this->area() . ', периметр: ' . $this->perimeter();
    }

    public function perimeter()
    {
        return $this->a + $this->b + $this->c;
    }

    public function area()
    {
        $semiPer = $this->perimeter() / 2;
        return ( $semiPer * ( $semiPer - $this->a ) * ( $semiPer - $this->b ) * ( $semiPer - $this->c ) ) ** 0.5;
    }
}


class Square extends Figure {

    protected $sideLength;

    public function __construct($sideLength)
    {
        $this->type = 'Квадрат';
        $this->sideLength = $sideLength;
    }

    public function getFigure()
    {
        return "Фигура {$this->getType()}, площадь: {$this->area()}, периметр: {$this->perimeter()}";
    }

    public function perimeter()
    {
        return $this->sideLength * 4;
    }
    public function area()
    {
        return $this->sideLength ** 2;
    }
}


$triangle = new Triangle(5, 10, 12);
echo $triangle->getFigure() . "<br>";

$square = new Square(10);
echo $square->getFigure() . "<br>";

$circle = new Circle(7);
echo $circle->getFigure() . "<br>";