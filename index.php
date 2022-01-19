<?php

class Figure {
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    function GetType()
    {
        echo $this->type;
    }

    public function Perimeter()
    {

    }
    public function Area()
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

    public function GetFigure()
    {
        return 'Фигура ' . $this->GetType() . ', площадь: ' . $this->Area() . ', периметр: ' . $this->Perimeter();
    }

    public function Perimeter()
    {
        return 2 * $this->radius * self::PI;
    }
    public function Area()
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
    public function GetFigure()
    {
        return 'Фигура ' . $this->GetType() . ', площадь: ' . $this->Area() . ', периметр: ' . $this->Perimeter();
    }
    public function Perimeter()
    {
        return $this->a + $this->b + $this->c;
    }
    public function Area()
    {
        $SemiPer = $this->Perimeter() / 2;
        return ( $SemiPer * ( $SemiPer - $this->a ) * ( $SemiPer - $this->b ) * ( $SemiPer - $this->c ) ) ** 0.5;
    }
}


class Square extends Figure {
    protected $SideLength;

    public function __construct($SideLength)
    {
        $this->type = 'Квадрат';
        $this->SideLength = $SideLength;
    }
    public function GetFigure()
    {
        return "Фигура {$this->GetType()}, площадь: {$this->Area()}, периметр: {$this->Perimeter()}";
    }
    public function Perimeter()
    {
        return $this->SideLength * 4;
    }
    public function Area()
    {
        return $this->SideLength ** 2;
    }
}

$triangle = new Triangle(5, 10, 12);
echo $triangle->GetFigure() . "<br>";

$square = new Square(10);
echo $square->GetFigure() . "<br>";

$circle = new Circle(7);
echo $circle->GetFigure() . "<br>";