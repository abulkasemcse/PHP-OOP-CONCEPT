<?php

class Shape
{
    protected $length = 5;
    protected $width = 10;   

    public function get_Rectangle_Area()
    {
        echo "The Rectangle Area is =";
        return $this->length * $this->width;
    }
}

class Triangle extends Shape
{
    protected $base = 10;
    protected $height = 12;    

    public function get_Triangle_Area()
    {
        echo "Triangle Area is =";
        return $this->base * $this->height / 2;
    }
}

$triangle = new Triangle;

echo $triangle->get_Rectangle_Area();
echo "<br>";
echo $triangle->get_Triangle_Area();