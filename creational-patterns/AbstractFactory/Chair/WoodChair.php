<?php

declare(strict_types=1);

namespace CreationalPatterns\AbstractFactory\Chair;

class WoodChair implements ChairInterface
{

    public function create(): string
    {
        return "Create wood chair";
    }
}