<?php

declare(strict_types=1);

namespace DesignPatterns;

require_once ('Shape.php');

class Circle implements Shape
{
    /**
     * @return void
     */
    public function draw(): void
    {
        echo "Draw a circle";
    }
}