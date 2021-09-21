<?php

namespace App\Numbers;

/**
 * Class NumberConversor
 * 
 * This class contains the necessary methods to return values according
 * to the multiple of the number sent
 */
class NumberConversor
{
    /**
     * Returns BigBangTheory if the number is multiple of three
     * five and seven
     *
     * @return string
     */
    public function isMultipleOfThreeFiveSeven($n): ?string
    {
        if ($n % 3 === 0 && $n % 5 === 0 && $n % 7 === 0) {
            return "BigBangTheory";
        };

        return false;
    }

    /**
     * Returns BangTheory if the number is multiple of five
     * and seven
     *
     * @return string
     */
    public function isMultipleOfFiveSeven($n): ?string
    {
        if ($n % 5 === 0 && $n % 7 === 0) {
            return "BangTheory";
        };

        return false;
    }

    /**
     * Returns BigTheory if the number is multiple of three
     * and seven
     *
     * @return string
     */
    public function isMultipleOfThreeSeven($n): ?string
    {
        if ($n % 3 === 0 && $n % 7 === 0) {
            return "BigTheory";
        };

        return false;
    }

    /**
     * Returns BigBang if the number is multiple of three
     * and five
     *
     * @return string
     */
    public function isMultipleOfThreeFive($n): ?string
    {
        if ($n % 3 === 0 && $n % 5 === 0) {
            return "BigBang";
        };

        return false;
    }

    /**
     * Returns Big if the number is multiple of three
     * 
     * Returns Bang if the number is multiple of five
     * 
     * Returns Theory if the number is multiple of seven
     * 
     * Returns the number if the number is not multiple of
     * thre, five or seven
     *
     * @return string
     */
    public function isMultipleOf($n): ?string
    {
        if ($n % 3 === 0) {
            return "Big";
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