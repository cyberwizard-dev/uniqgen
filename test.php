<?php

require './vendor/autoload.php'; // Make sure to use the correct path to autoload.php

use Cyber\CurrencyGen\CurrencyGen;

// Create an instance of CurrencyGen
$currencyGen = new CurrencyGen();

// Generate a transaction reference
$transactionReference = $currencyGen->getTransactionReference();

echo "Transaction Reference: $transactionReference\n";
