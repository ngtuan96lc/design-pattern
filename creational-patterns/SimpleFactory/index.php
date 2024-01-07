<?php

declare(strict_types=1);

use DesignPatterns\ShapeFactory;

require_once ('ShapeFactory.php');

$circle = ShapeFactory::createShape('circle');
$circle->draw(); // Draw a circle

$rectangle = ShapeFactory::createShape('rectangle');
$rectangle->draw(); // Draw a rectangle


