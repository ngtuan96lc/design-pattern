<?php

declare(strict_types=1);

namespace CreationalPatterns\AbstractFactory\Table;

interface TableInterface
{
    public function create();
}