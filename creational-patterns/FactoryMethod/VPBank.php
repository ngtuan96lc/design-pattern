<?php

namespace DesignPatterns;

require_once ('Bank.php');

class VPBank implements Bank
{
    /**
     * @return mixed
     */
    public function getName()
    {
        return "VP Bank";
    }
}