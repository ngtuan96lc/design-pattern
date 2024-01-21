<?php

declare(strict_types=1);

namespace CreationalPatterns\Builder;

class Product
{
    private string $name;
    private string $price;
    private string $color;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function exportInformation(): string
    {
        return "Product's name: {$this->name}, product's price: {$this->price}, product's color: {$this->color}";
    }
}