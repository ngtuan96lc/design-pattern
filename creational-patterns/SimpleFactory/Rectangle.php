<?php

declare(strict_types=1);

namespace DesignPatterns;

require_once ('Shape.php');

class Rectangle implements Shape
{
    /**
     * @return void
     */
    public function draw(): void
    {
        echo "Draw a rectangle";
    }
}