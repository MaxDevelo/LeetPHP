<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mwawrzyniak\LeetPhp\ThreeSumClosest\ThreeSumClosest;

class ThreeSumClosestTest extends TestCase
{
    protected ThreeSumClosest $threeSumClosest;
    protected function setUp(): void
    {
        $this->threeSumClosest = new ThreeSumClosest();
    }

    public function testThreeSumClosest() {
        $this->assertEquals($this->threeSumClosest->threeSumClosest([-1,2,1,-4], 1), 2);
        $this->assertEquals($this->threeSumClosest->threeSumClosest([0,0,0], 1), 0);
        $this->assertEquals($this->threeSumClosest->threeSumClosest([1,1,-1], 0), 1);
        $this->assertEquals($this->threeSumClosest->threeSumClosest([4,0,5,-5,3,3,0,-4,-5], -2), -2);
    }
    protected function tearDown(): void
    {
        unset($this->threeSumClosest);
    }
}