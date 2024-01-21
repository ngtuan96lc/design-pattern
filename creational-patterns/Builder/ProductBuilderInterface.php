<?php

declare(strict_types=1);

namespace CreationalPatterns\Builder;

interface ProductBuilderInterface
{
    public function build();
}