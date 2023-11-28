<?php

use cyber\CurrencyGen\CurrencyGen;

// Create an instance of CurrencyGen
$currencyGen = new CurrencyGen();

// Generate a big random amount in Nigerian Naira (NGN)
$bigAmountNGN = CurrencyGen::bigMoney();
echo "Big Amount in NGN: $bigAmountNGN\n";

// Generate a small random amount in Nigerian Naira (NGN)
$smallAmountNGN = CurrencyGen::smallMoney();
echo "Small Amount in NGN: $smallAmountNGN\n";

// Generate a random transaction reference
$transactionReference = $currencyGen->getTransactionReference();
echo "Transaction Reference: $transactionReference\n";

// Format values in different currencies
$value = 1000.50;

echo 'Formatted Value in NGN: ' . CurrencyGen::showNaira($value) . "\n";
echo 'Formatted Value in USD: ' . CurrencyGen::showDollar($value) . "\n";
echo 'Formatted Value in EUR: ' . CurrencyGen::showEuro($value) . "\n";
echo 'Formatted Value in GBP: ' . CurrencyGen::showPound($value) . "\n";
echo 'Formatted Value in JPY: ' . CurrencyGen::showYen($value) . "\n";
echo 'Formatted Value in CHF: ' . CurrencyGen::showFranc($value) . "\n";
echo 'Formatted Value in AUD: ' . CurrencyGen::showAUD($value) . "\n";
echo 'Formatted Value in CAD: ' . CurrencyGen::showCAD($value) . "\n";
echo 'Formatted Value in INR: ' . CurrencyGen::showINR($value) . "\n";
echo 'Formatted Value in ZAR: ' . CurrencyGen::showZAR($value) . "\n";
