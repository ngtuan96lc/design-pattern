<?php

declare(strict_types=1);

namespace CreationalPatterns\Builder;

require_once ('ConcreteProductBuilder.php');
require_once ('ProductDirector.php');
require_once ('Product.php');

$builder = new ConcreteProductBuilder();
$productDirector = new ProductDirector();

$builder->setName("Iphone14");
$builder->setColor("Black");
$builder->setPrice("1500");

/** @var Product $product */
$product = $productDirector->buildProduct($builder);
echo $product->exportInformation();