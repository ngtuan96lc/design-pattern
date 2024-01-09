<?php

namespace DesignPatterns;

require_once ('Bank.php');

class MBBank implements Bank
{
    public function getName()
    {
        return "MB Bank";
    }
}