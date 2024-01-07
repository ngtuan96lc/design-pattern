<?php

declare(strict_types=1);

namespace DesignPatterns;

require_once ('Circle.php');
require_once ('Rectangle.php');

class ShapeFactory
{
    /**
     * @param $type
     * @return Rectangle|Circle
     */
    public static function createShape($type): Rectangle|Circle
    {
        switch ($type)
        {
            case 'circle':
                return new Circle();
                break;
            case 'rectangle':
                return new Rectangle();
                break;
            default:
                throw new \InvalidArgumentException("The system doesn't support this shape {$type}");
        }
    }
}