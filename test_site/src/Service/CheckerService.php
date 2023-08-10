<?php

namespace App\Service;

use App\Prompt\Checker;

class CheckerService implements Checker
{
    public function isPalindrome(string $word) : bool
    {
        $reversedWord = strrev($word);

        return $word === $reversedWord;
    }
    
    public function isAnagram(string $word, string $comparison) : bool
    {
        $wordArray = str_split($word);
        $comparisonArray = str_split($comparison);

        sort($wordArray);
        sort($comparisonArray);

        return $wordArray === $comparisonArray;
    }

    public function isPangram(string $phrase) : bool
    {
        $alphabetArray = range('a', 'z');
        $phrase = mb_convert_case($phrase, MB_CASE_LOWER);

        foreach($alphabetArray as $letter)
        {
            if (strpos($phrase, $letter) === false)
            {
                return false;
            }
        }

        return true;
    }
}
