<?php

declare(strict_types=1);

namespace Mwawrzyniak\LeetPhp\LengthOfLongestSubstring;

class LengthOfLongestSubstring
{
    public function lengthOfLongestSubstring(string $s): int
    {
        $substring = "";
        $maxLength = 0;
        
        for($c = 0; $c < \strlen($s); $c++) {
            $pos = \strpos($substring, $s[$c]);

            if ($pos !== false) {
                $substring = \substr($substring, $pos+1);
            }

            $substring .= $s[$c];
            $maxLength = \max($maxLength, \strlen($substring));
        }

        return $maxLength;
    }
}
