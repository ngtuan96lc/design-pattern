<?php

declare(strict_types=1);

namespace CreationalPatterns\AbstractFactory;

use CreationalPatterns\AbstractFactory\Chair\ChairInterface;
use CreationalPatterns\AbstractFactory\Table\TableInterface;

use CreationalPatterns\AbstractFactory\Table\PlasticTable;
use CreationalPatterns\AbstractFactory\Chair\PlasticChair;

class PlasticFactory extends FurnitureAbstractFactory
{

    public function createChair(): ChairInterface
    {
        return new PlasticChair();
    }

    public function createTable(): TableInterface
    {
        return new PlasticTable();
    }
}