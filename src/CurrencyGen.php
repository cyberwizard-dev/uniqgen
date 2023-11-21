<?php

namespace cyber\CurrencyGen;

class CurrencyGen
{
    private bool $isAlphaNumeric;
    private int $length;

    /**
     * CurrencyGen constructor.
     *
     * @param bool $isAlphaNumeric Determines whether the generated transaction reference should be alphanumeric.
     * @param int $length The length of the generated transaction reference.
     */
    public function __construct($isAlphaNumeric = true, $length = 13)
    {
        $this->isAlphaNumeric = $isAlphaNumeric;
        $this->length = $length;
    }

    /**
     * Generates a random amount of money in Nigerian Naira (NGN).
     *
     * @return string The generated amount in NGN format (e.g., ₦1,000.00).
     */
    public static function bigMoney(): string
    {
        $amount = mt_rand(100000, 1000000000);
        return self::showNaira($amount);
    }

    /**
     * Generates a small random amount of money in Nigerian Naira (NGN).
     *
     * @return string The generated amount in NGN format (e.g., ₦100.00).
     */
    public static function smallMoney(): string
    {
        $amount = mt_rand(100, 1000);
        return self::showNaira($amount);
    }

    /**
     * Generates a transaction reference.
     *
     * @return string The generated transaction reference.
     */
    public function getTransactionReference(): string
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $randomString = '';

        $timestamp = date('YmdHis');
        $microseconds = sprintf('%06d', microtime(true) * 1000000);

        if ($this->isAlphaNumeric) {
            for ($i = 0; $i < $this->length; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
        } else {
            $min = pow(10, $this->length - 1);
            $max = pow(10, $this->length) - 1;
            $randomString = (string)rand($min, $max);
        }

        $processId = getmypid();

        return $microseconds . $processId . $randomString;
    }

    /**
     * Formats a value as Nigerian Naira (NGN).
     *
     * @param float $value The value to be formatted.
     * @return string The formatted value in NGN format (e.g., ₦1,000.00).
     */
    public static function showNaira($value): string
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value, 2);
        }
        return '₦' . $value;
    }


    /**
     * Formats a value as US Dollar (USD).
     *
     * @param float $value The value to be formatted.
     * @return string The formatted value in USD format (e.g., $1,000.00).
     */
    public static function showDollar($value): string
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value, 2);
        }
        return '$' . $value;
    }

    /**
     * Formats a value as Euro (EUR).
     *
     * @param float $value The value to be formatted.
     * @return string The formatted value in EUR format (e.g., €1,000.00).
     */
    public static function showEuro($value): string
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value, 2);
        }
        return '€' . $value;
    }

    /**
     * Formats a value as British Pound (GBP).
     *
     * @param float $value The value to be formatted.
     * @return string The formatted value in GBP format (e.g., £1,000.00).
     */
    public static function showPound($value): string
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value, 2);
        }
        return '£' . $value;
    }

    /**
     * Formats a value as Japanese Yen (JPY).
     *
     * @param float $value The value to be formatted.
     * @return string The formatted value in JPY format (e.g., ¥1,000).
     */
    public static function showYen($value): string
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value, 0); // Yen doesn't typically use decimal places
        }
        return '¥' . $value;
    }

    /**
     * Formats a value as Swiss Franc (CHF).
     *
     * @param float $value The value to be formatted.
     * @return string The formatted value in CHF format (e.g., ₣1,000.00).
     */
    public static function showFranc($value): string
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value, 2);
        }
        return 'CHF' . $value;
    }

    /**
     * Formats a value as Australian Dollar (AUD).
     *
     * @param float $value The value to be formatted.
     * @return string The formatted value in AUD format (e.g., A$1,000.00).
     */
    public static function showAUD($value): string
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value, 2);
        }
        return 'A$' . $value;
    }

    /**
     * Formats a value as Canadian Dollar (CAD).
     *
     * @param float $value The value to be formatted.
     * @return string The formatted value in CAD format (e.g., C$1,000.00).
     */
    public static function showCAD($value): string
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value, 2);
        }
        return 'C$' . $value;
    }

    /**
     * Formats a value as Indian Rupee (INR).
     *
     * @param float $value The value to be formatted.
     * @return string The formatted value in INR format (e.g., ₹1,000).
     */
    public static function showINR($value): string
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value);
        }
        return '₹' . $value;
    }

    /**
     * Formats a value as South African Rand (ZAR).
     *
     * @param float $value The value to be formatted.
     * @return string The formatted value in ZAR format (e.g., R1,000.00).
     */

    public static function showZAR($value): string
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value);
        }
        return 'R' . $value;
    }
}
