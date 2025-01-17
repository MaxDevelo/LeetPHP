<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mwawrzyniak\LeetPhp\Palindrome\IsPalindrome;

class IsPalindromeTest extends TestCase
{
    protected IsPalindrome $isPalindrome;
    protected function setUp(): void
    {
        $this->isPalindrome = new IsPalindrome();
    }

    public function testIsPalindrome() {
        $this->assertTrue($this->isPalindrome->isPalindrome(121));
        $this->assertFalse($this->isPalindrome->isPalindrome(10));
    }
    protected function tearDown(): void
    {
        unset($this->isPalindrome);
    }
}