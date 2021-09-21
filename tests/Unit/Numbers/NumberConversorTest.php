<?php

namespace Tests\Unit\Numbers;

use App\Numbers\NumberConversor;
use Tests\TestCase;

/**
 * Class NumberConversor
 *
 * Run test for this file
 * php artisan test tests/Unit/Numbers/NumberConversorTest
 * php artisan test --filter NumberConversorTest
 *
 * @package Tests\Unit\Numbers
 */
class NumberConversorTest extends TestCase
{
    /** @test */
    public function is_multiple_of_three_five_seven()
    {
        $conversor = new NumberConversor();

        $this->assertEquals(
            $conversor->isMultipleOfThreeFiveSeven("105"),
            'BigBangTheory'
        );
    }

    /** @test */
    public function is_multiple_of_five_seven()
    {
        $conversor = new NumberConversor();

        $this->assertEquals(
            $conversor->isMultipleOfFiveSeven("35"),
            'BangTheory'
        );
    }

    /** @test */
    public function is_multiple_of_three_seven()
    {
        $conversor = new NumberConversor();

        $this->assertEquals(
            $conversor->isMultipleOfThreeSeven("21"),
            'BigTheory'
        );
    }

    /** @test */
    public function is_multiple_of_three_five()
    {
        $conversor = new NumberConversor();

        $this->assertEquals(
            $conversor->isMultipleOfThreeFive("15"),
            'BigBang'
        );
    }

    /** @test */
    public function isMultipleOf()
    {
        $conversor = new NumberConversor();

        $this->assertEquals(
            $conversor->isMultipleOf("3"),
            'Big'
        );

        $this->assertEquals(
            $conversor->isMultipleOf("5"),
            'Bang'
        );

        $this->assertEquals(
            $conversor->isMultipleOf("7"),
            'Theory'
        );

        $this->assertEquals(
            $conversor->isMultipleOf("2"),
            '2'
        );
    }

}
