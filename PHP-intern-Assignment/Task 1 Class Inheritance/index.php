<?php

class Mother
{
    public function getHairColor()
    {
        return 'black';
    }
}

class Child extends Mother
{

}

$child = new Child;

echo $child->getHairColor();