<?php

declare(strict_types=1);

namespace CreationalPatterns\AbstractFactory\Chair;

class PlasticChair implements ChairInterface
{

    public function create(): string
    {
        return "Create plastic chair";
    }
}