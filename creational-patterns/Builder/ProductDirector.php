<?php

declare(strict_types=1);

namespace CreationalPatterns\Builder;

require_once ('ProductBuilderInterface.php');

class ProductDirector
{
    public function buildProduct(ProductBuilderInterface $builder)
    {
        return $builder->build();
    }
}