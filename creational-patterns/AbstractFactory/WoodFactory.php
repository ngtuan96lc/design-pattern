<?php

declare(strict_types=1);

namespace CreationalPatterns\AbstractFactory;

use CreationalPatterns\AbstractFactory\Chair\ChairInterface;
use CreationalPatterns\AbstractFactory\Table\TableInterface;

use CreationalPatterns\AbstractFactory\Chair\WoodChair;
use CreationalPatterns\AbstractFactory\Table\WoodTable;

class WoodFactory extends FurnitureAbstractFactory
{

    public function createChair(): ChairInterface
    {
        return new WoodChair();
    }

    public function createTable(): TableInterface
    {
        return new WoodTable();
    }
}