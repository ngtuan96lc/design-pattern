<?php

namespace DesignPatterns;

require_once ('BankFactory.php');
require_once ('VPBank.php');

class VPBankFactory implements BankFactory
{

    /**
     * @return Bank
     */
    public function createBank(): Bank
    {
        return new VPBank();
    }
}