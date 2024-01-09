<?php

namespace DesignPatterns;

class BankVendor
{
    private BankFactory $bankFactory;

    /**
     * @param BankFactory $bankFactory
     */
    public function __construct(
        BankFactory $bankFactory
    ) {
        $this->bankFactory = $bankFactory;
    }

    /**
     * @return void
     */
    public function getBank(): void
    {
        $bank = $this->bankFactory->createBank();
        echo $bank->getName();
    }
}