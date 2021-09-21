<?php

namespace App\Numbers;

class NumberConversor
{

    public function isMultipleOfThreeFiveSeven($n): ?string
    {
        if ($n % 3 === 0 && $n % 5 === 0 && $n % 7 === 0) {
            return "BigBangTheory";
        };

        return false;
    }

    public function isMultipleOfFiveSeven($n): ?string
    {
        if ($n % 5 === 0 && $n % 7 === 0) {
            return "BangTheory";
        };

        return false;
    }

    public function isMultipleOfThreeSeven($n): ?string
    {
        if ($n % 3 === 0 && $n % 7 === 0) {
            return "BigTheory";
        };

        return false;
    }

    public function isMultipleOfThreeFive($n): ?string
    {
        if ($n % 3 === 0 && $n % 5 === 0) {
            return "BigBang";
        };

        return false;
    }

    public function isMultipleOf($n): ?string
    {
        if ($n % 3 === 0) {
            return "BigBang";
        };

        if ($n % 5 === 0) {
            return "Bang";
        };

        if ($n % 7 === 0) {
            return "Theory";
        };

        return $n;
    }
}