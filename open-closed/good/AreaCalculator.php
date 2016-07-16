<?php

class AreaCalculator
{
    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            $areas[] = $shape->area();
        }

        return array_sum($areas);
    }
}
