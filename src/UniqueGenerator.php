<?php

namespace cyber\UniqueGenerator;

use Illuminate\Support\Str;
use Carbon\Carbon;

class UniqueGenerator
{
    private bool $isAlphaNumeric;
    private int $length;

    public function __construct($isAlphaNumeric = true, $length = 13)
    {
        $this->isAlphaNumeric = $isAlphaNumeric;
        $this->length = $length;
    }

    public function getTransactionReference(): string
    {
        $timestamp = Carbon::now()->format('YmdHis');
        $microseconds = Carbon::now()->format('u');

        if ($this->isAlphaNumeric) {
            $randomString = Str::random($this->length);
        } else {
            $min = pow(10, $this->length - 1);
            $max = pow(10, $this->length) - 1;
            $randomString = (string)rand($min, $max);
        }

        $processId = getmypid(); // Unique process identifier

        return $microseconds . $processId . $randomString;
    }

    public function showNaira($value)
    {
        if (is_numeric($value) && fmod($value, 1) === 0) {
            $value = number_format($value, 2);
        }
        return '₦' . $value;
    }

}
