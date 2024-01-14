<?php

declare(strict_types=1);

namespace CreationalPatterns\AbstractFactory;

use CreationalPatterns\AbstractFactory\WoodFactory;
use CreationalPatterns\AbstractFactory\PlasticFactory;

class FurnitureFactory
{
    public static function getFactory($materialType)
    {
        switch ($materialType)
        {
            case MaterialType::PLASTIC:
                return new PlasticFactory();
            case MaterialType::WOOD:
                return new WoodFactory();
            default:
                throw new \InvalidArgumentException("Not support type {$materialType}");
        }
    }
}