<?php

declare(strict_types=1);

namespace CreationalPatterns\AbstractFactory\Table;

class WoodTable implements TableInterface
{

    public function create(): string
    {
        return "Create wood table";
    }
}