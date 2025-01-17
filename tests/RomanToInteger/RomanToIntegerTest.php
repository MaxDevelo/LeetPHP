<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mwawrzyniak\LeetPhp\RomanToInteger\RomanToInteger;

class RomanToIntegerTest extends TestCase
{
    protected RomanToInteger $romanToInteger;
    protected function setUp(): void
    {
        $this->romanToInteger = new RomanToInteger();
    }

    public function testromanToInteger() {
        $this->assertEquals(0, $this->romanToInteger->romanToInt("WWW"));
        $this->assertEquals(0, $this->romanToInteger->romanToInt("IVIV"));

        $this->assertEquals(3, $this->romanToInteger->romanToInt("III"));
        $this->assertEquals(58, $this->romanToInteger->romanToInt("LVIII"));
        $this->assertEquals(1994, $this->romanToInteger->romanToInt("MCMXCIV"));
    }
    protected function tearDown(): void
    {
        unset($this->romanToInteger);
    }
}