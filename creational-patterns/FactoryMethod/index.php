<?php

require_once ('VPBankFactory.php');
require_once ('MBBankFactory.php');
require_once ('BankVendor.php');

$vpBankFactory = new \DesignPatterns\VPBankFactory();
$bankVendor1 = new \DesignPatterns\BankVendor($vpBankFactory);
$bankVendor1->getBank();

echo "<br/>";

$mbBankFactory = new \DesignPatterns\MBBankFactory();
$bankVendor2 = new \DesignPatterns\BankVendor($mbBankFactory);
$bankVendor2->getBank();