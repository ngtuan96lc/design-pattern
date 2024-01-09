<?php

namespace DesignPatterns;

interface BankFactory
{
    public function createBank(): Bank;
}