<?php

declare(strict_types=1);

namespace Mwawrzyniak\LeetPhp\ThreeSumClosest;

/**
 * @Runtime : 200ms
 * @Memory  : 20.42 MB
 */

class ThreeSumClosest
{    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    public function threeSumClosest($nums, $target)
    {
        \sort($nums);

        $sum = $nums[0] + $nums[1] + $nums[2];
        $result = $sum;
        $countNums = \count($nums);

        for ($i = 0; $i < $countNums; $i++) {
            $j = $i + 1;
            $k = $countNums - 1;
            
            while ($j < $k) {
                $sum = $nums[$i] + $nums[$j] + $nums[$k];

                if (\abs($sum - $target) < \abs($result - $target)) {
                    $result = $sum;
                }

                if ($sum > $target) {
                    $k--;
                } else {
                    $j++;
                }
            }
        }

        return $result;
    }
}