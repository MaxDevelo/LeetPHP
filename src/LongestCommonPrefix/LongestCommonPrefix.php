<?php

/**
 * @Runtime : 1ms
 * @Memory : 20.00 MB
 */

declare(strict_types=1);

namespace Mwawrzyniak\LeetPhp\LongestCommonPrefix;

class LongestCommonPrefix
{
    public function longestCommonPrefix(array $words): string
    {
        $lengthWordsArray = \count($words);

        if (!$lengthWordsArray) {
            return '';
        }

        if ($lengthWordsArray === 1) {
            return $words[0];
        }
        
        $isPrefix = true;
        $firstWord = $words[0];

        for($w=0; $w < \strlen($firstWord); $w++) {
            $isPrefix = true;
            $prefixFirstWord = \substr($firstWord, 0, $w ? -$w : null);
            foreach($words as $word) {
                if (\substr($word, 0, \strlen($prefixFirstWord)) !== $prefixFirstWord) {
                    $isPrefix = false;
                }
            }
            if ($isPrefix) {
                return $prefixFirstWord;
            }
        }
        
        return '';
    }
}
