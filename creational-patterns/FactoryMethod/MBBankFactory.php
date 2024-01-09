<?php

namespace DesignPatterns;

require_once ('BankFactory.php');
require_once ('MBBank.php');

class MBBankFactory implements BankFactory
{

    /**
     * @return Bank
     */
    public function createBank(): Bank
    {
        return new MBBank();
    }
}