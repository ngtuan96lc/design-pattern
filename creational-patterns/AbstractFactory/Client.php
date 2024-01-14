<?php

declare(strict_types=1);

namespace CreationalPatterns\AbstractFactory;

use \CreationalPatterns\AbstractFactory\FurnitureFactory;

class Client
{
    public function execute()
    {
        $factory = FurnitureFactory::getFactory(MaterialType::WOOD);
        $chair = $factory->createChair();
        $chair->create(); // 'Create wood chair'

        $factory = FurnitureFactory::getFactory(MaterialType::PLASTIC);
        $table = $factory->createTable();
        $table->create(); // 'Create wood table'
    }
}
