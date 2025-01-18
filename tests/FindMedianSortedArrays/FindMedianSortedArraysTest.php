<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mwawrzyniak\LeetPhp\FindMedianSortedArrays\FindMedianSortedArrays;

class FindMedianSortedArraysTest extends TestCase
{
    protected FindMedianSortedArrays $findMedianSortedArrays;
    protected function setUp(): void
    {
        $this->findMedianSortedArrays = new FindMedianSortedArrays();
    }

    public function testfindMedianSortedArrays() {
        $this->assertEquals(2, $this->findMedianSortedArrays->findMedianSortedArrays([1, 3], [2]));
        $this->assertEquals(2.5, $this->findMedianSortedArrays->findMedianSortedArrays([1,2], [3,4]));
    }
    protected function tearDown(): void
    {
        unset($this->findMedianSortedArrays);
    }
}