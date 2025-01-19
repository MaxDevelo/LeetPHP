<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mwawrzyniak\LeetPhp\LongestCommonPrefix\LongestCommonPrefix;

class LongestCommonPrefixTest extends TestCase
{
    protected LongestCommonPrefix $longestCommonPrefix;
    protected function setUp(): void
    {
        $this->longestCommonPrefix = new LongestCommonPrefix();
    }

    public function testLongestCommonPrefix() {
        $this->assertEquals('fl', $this->longestCommonPrefix->longestCommonPrefix(["flower","flow","flight"]));
        $this->assertEquals('', $this->longestCommonPrefix->longestCommonPrefix(["dog","racecar","car"]));
        $this->assertEquals('', $this->longestCommonPrefix->longestCommonPrefix([]));
        $this->assertEquals('bug', $this->longestCommonPrefix->longestCommonPrefix(["bug"]));
        $this->assertEquals('a', $this->longestCommonPrefix->longestCommonPrefix(["ab", "a"]));
        $this->assertEquals('flower', $this->longestCommonPrefix->longestCommonPrefix(["flower", "flower","flower", "flower"]));
    }
    protected function tearDown(): void
    {
        unset($this->longestCommonPrefix);
    }
}