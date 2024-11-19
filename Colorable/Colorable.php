<?php
interface Colorable
{
    function howToColor();
}

class Circle
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function area()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle
{
    private $width;
    private $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function area()
    {
        return $this->width * $this->height;
    }
}

class Square implements Colorable
{
    private $side;
    public function __construct($side)
    {
        $this->side = $side;
    }
    public function setSide($side)
    {
        $this->side = $side;
    }
    public function getSide()
    {
        return $this->side;
    }
    public function area()
    {
        return $this->side * $this->side;
    }
    public function howToColor()
    {
        return "Color all four sides.";
    }
}

$newCircle = new Circle(1);
$newRectangle = new Rectangle(1, 2);
$newSquare = new Square(1);
$shapes = [$newCircle, $newRectangle, $newSquare];
foreach ($shapes as $shape) {
    if (!empty(class_implements($shape)["Colorable"])) {
        echo $shape->howToColor() . " ";
    }
    echo "Area: " . $shape->area() . "\n";
}
