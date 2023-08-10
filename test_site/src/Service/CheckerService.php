<?php

namespace App\Service;

use App\Prompt\Checker;

class CheckerService implements Checker
{
    public function isPalindrome(string $word) : bool
    {
        $word = $this->prepareInput($word);
        $reversedWord = $this->mb_strrev($word);

        return $word === $reversedWord;
    }
    
    public function isAnagram(string $word, string $comparison) : bool
    {
        $wordArray = str_split($this->prepareInput($word));
        $comparisonArray = str_split($this->prepareInput($comparison));

        sort($wordArray);
        sort($comparisonArray);

        return $wordArray === $comparisonArray;
    }

    public function isPangram(string $phrase) : bool
    {
        $alphabetArray = range('a', 'z');
        $phrase = $this->prepareInput($phrase);

        foreach($alphabetArray as $letter)
        {
            if (strpos($phrase, $letter) === false)
            {
                return false;
            }
        }

        return true;
    }

    private function prepareInput(string $input): string
    {
        //Remove all whitespace from $input
        $input = preg_replace('/\s+/', '', $input);

        //Convert $input to lower case
        $input = mb_convert_case($input, MB_CASE_LOWER);

        return $input;
    }

    /** Reference to https://www.php.net/manual/en/function.strrev.php#125301 */
    private function mb_strrev(string $string): string
    {
        $chars = mb_str_split($string);

        return implode('', array_reverse($chars));
    }
}
