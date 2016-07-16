<?php

class AreaCalculator
{
    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            // - this is a sign of breaking the open-closed principle
            // - this is code rot since, down the line, we might introduce a Triangle
            //     which will introduce breakage
            // To fix this, as Uncle Bob says,
            // 1. Separate extensible behaviour behind an interface
            // 2. Flip the dependencies
            if ($shape instanceof Square) {
                $areas[] = $shape->width * $shape->height;
            } else {
                $areas[] = $shape ** 2 * pi();
            }
        }

        return array_sum($areas);
    }
}