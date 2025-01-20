<?php

declare(strict_types=1);

namespace Mwawrzyniak\LeetPhp\ValidParentheses;

class ValidParentheses
{
    public function isValid($s): bool
    {
        $openBrackets = ["(", "{", "["];
        $stacks = [];
        
        for($i=0; $i<\strlen($s); $i++) {
            $currentCharacter = $s[$i];

            if (\in_array($currentCharacter,  $openBrackets)) {
                \array_push($stacks, $currentCharacter);
            } else {
                if(empty($stacks)) {
                    return false;
                }
                
                $popedCharacter = \array_pop($stacks);

                if ($popedCharacter === "(" && $currentCharacter !== ")") {
                    return false;
                }
                if($popedCharacter === "[" && $currentCharacter !== "]") {
                    return false;
                }
                if($popedCharacter === "{" && $currentCharacter !== "}") {
                    return false;
                }
            }
        }

        return empty($stacks);
    }
}