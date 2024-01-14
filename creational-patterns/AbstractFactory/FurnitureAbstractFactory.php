<?php

declare(strict_types=1);

namespace CreationalPatterns\AbstractFactory;

use CreationalPatterns\AbstractFactory\Chair\ChairInterface;
use CreationalPatterns\AbstractFactory\Table\TableInterface;

abstract class FurnitureAbstractFactory
{
    public abstract function createChair(): ChairInterface;

    public abstract function createTable(): TableInterface;
}