<?php

class Circle implements ShapeInterface
{
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return $this->radius ** 2 * pi();
    }
}
