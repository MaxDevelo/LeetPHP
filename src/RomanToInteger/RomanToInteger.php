<?php

declare(strict_types=1);

namespace Mwawrzyniak\LeetPhp\RomanToInteger;

class RomanToInteger
{
    public const ROMAN_CHARACTERS = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    public const ROMAN_CHARACTERS_SUBSTRACTION = [
        'I' => ['V', 'X'],
        'X' => ['L', 'C'],
        'C' => ['D', 'M'],
    ];

    public function romanToInt(string $roman): int
    {
        $characters = \str_split($roman);

        if (
            !$this->verifyIfCharactersAreRomans($characters) ||
            !$this->isValidRomanCharacters($roman)
        ) {
            return 0;
        }

        $result = 0;

        for ($i = 0; $i < count($characters); $i++) {
            $currentRmanCharacter = $characters[$i];
            $nextRomanCharacter = null;

            if (isset($characters[$i + 1])) {
                $nextRomanCharacter = $characters[$i + 1];
            }

            if ($nextRomanCharacter && self::ROMAN_CHARACTERS_SUBSTRACTION[$currentRmanCharacter]) {
                if (\in_array($nextRomanCharacter, self::ROMAN_CHARACTERS_SUBSTRACTION[$currentRmanCharacter])) {
                    $result += self::ROMAN_CHARACTERS[$nextRomanCharacter] - self::ROMAN_CHARACTERS[$currentRmanCharacter];
                    $i++;
                    continue;
                }
            }

            $result += self::ROMAN_CHARACTERS[$currentRmanCharacter];

        }

        return $result;
    }

    public function verifyIfCharactersAreRomans(array $characters): bool
    {
        return array_reduce($characters, function ($carry, $char) {
            return $carry && in_array($char, \array_keys(self::ROMAN_CHARACTERS));
        }, true);
    }

    public function isValidRomanCharacters(string $roman): bool
    {
        foreach (self::ROMAN_CHARACTERS_SUBSTRACTION as $key => $values) {
            foreach ($values as $value) {
                if (\substr_count($roman, $key . $value) > 1) {
                    return false;
                }
            }
        }

        return true;
    }
}