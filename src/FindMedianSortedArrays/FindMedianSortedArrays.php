<?php

declare(strict_types=1);

namespace Mwawrzyniak\LeetPhp\FindMedianSortedArrays;

class FindMedianSortedArrays
{
    /*
    * @param Integer[] $nums1
    * @param Integer[] $nums2
    * @return Float
    */
    public function findMedianSortedArrays(array $nums1, array $nums2): float
    {
        $mergedArrays = \array_merge($nums1, $nums2);
        \sort($mergedArrays);

        $length = \count($mergedArrays);

        if ($length % 2 === 0) {
            return ($mergedArrays[(int)(($length-1) / 2)] + $mergedArrays[((int)(($length-1) / 2)) + 1]) / 2;
        }

        return $mergedArrays[(($length-1) / 2)];
    }
}
