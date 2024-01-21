<?php

declare(strict_types=1);

namespace CreationalPatterns\Builder;

require_once ('ProductBuilderInterface.php');
require_once ('Product.php');

class ConcreteProductBuilder implements ProductBuilderInterface
{

    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    /**
     * @return Product
     */
    public function build()
    {
        return $this->product;
    }

    public function setName($name): void
    {
        $this->product->setName($name);
    }

    public function setPrice($price): void
    {
        $this->product->setPrice($price);
    }

    public function setColor($color): void
    {
        $this->product->setColor($color);
    }
}