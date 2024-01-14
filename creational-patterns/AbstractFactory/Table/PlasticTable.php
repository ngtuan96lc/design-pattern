<?php

declare(strict_types=1);

namespace CreationalPatterns\AbstractFactory\Table;

class PlasticTable implements TableInterface
{

    public function create(): string
    {
        return "Create plastic table";
    }
}