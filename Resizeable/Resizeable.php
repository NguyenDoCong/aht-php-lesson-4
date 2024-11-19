<?php
interface Resizeable
{
    function resize($percent);
}

class Circle implements Resizeable
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
    public function resize($percent)
    {
        return 3.14 * $this->radius * $this->radius * $percent;
    }
}

class Rectangle implements Resizeable
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
    public function resize($percent)
    {
        return $this->width * $this->height * $percent;
    }
}

class Square implements Resizeable
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
    public function resize($percent)
    {
        return $this->side * $this->side * $percent;
    }
}

$newCircle = new Circle(1);
$newRectangle = new Rectangle(1, 2);
$newSquare = new Square(1);
echo "Area before resize:" . $newCircle->area() . "\n";
echo "Area after resize:" . $newCircle->resize(0.1) . "\n";

echo "Area before resize:" . $newRectangle->area() . "\n";
echo "Area after resize:" . $newRectangle->resize(0.1) . "\n";

echo "Area before resize:" . $newSquare->area() . "\n";
echo "Area after resize:" . $newSquare->resize(0.1) . "\n";
