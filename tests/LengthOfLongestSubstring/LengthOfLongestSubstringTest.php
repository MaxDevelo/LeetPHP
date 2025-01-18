<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mwawrzyniak\LeetPhp\LengthOfLongestSubstring\LengthOfLongestSubstring;

class LengthOfLongestSubstringTest extends TestCase
{
    protected LengthOfLongestSubstring $lengthOfLongestSubstring;
    protected function setUp(): void
    {
        $this->lengthOfLongestSubstring = new LengthOfLongestSubstring();
    }

    public function testLengthOfLongestSubstring() {
        $this->assertEquals(3, $this->lengthOfLongestSubstring->lengthOfLongestSubstring('bwf'));
        $this->assertEquals(3, $this->lengthOfLongestSubstring->lengthOfLongestSubstring('dvdf'));
        $this->assertEquals(1, $this->lengthOfLongestSubstring->lengthOfLongestSubstring(' '));
        $this->assertEquals(3,$this->lengthOfLongestSubstring->lengthOfLongestSubstring('abcabcbb'));
        $this->assertEquals( 1, $this->lengthOfLongestSubstring->lengthOfLongestSubstring('bbbbb'));
        $this->assertEquals(3, $this->lengthOfLongestSubstring->lengthOfLongestSubstring('pwwkew'));
    }
    protected function tearDown(): void
    {
        unset($this->lengthOfLongestSubstring);
    }
}