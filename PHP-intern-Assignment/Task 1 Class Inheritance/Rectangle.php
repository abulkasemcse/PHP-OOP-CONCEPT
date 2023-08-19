<?php

class Shape
{
    protected $length = 5;
    protected $width = 10;   

    public function getArea()
    {
        return $this->length * $this->width;
    }
}

class Rectangle extends Shape
{

}

$rectangle = new Rectangle;

echo $rectangle->getArea();