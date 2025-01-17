<?php

declare(strict_types=1);

namespace Mwawrzyniak\LeetPhp\Palindrome;

class IsPalindrome
{
    public function isPalindrome($value): bool
    {
        return \strrev((string)$value) === (string)$value;
    }
}