<?php

namespace App\Service;

use App\Prompt\Checker;

class CheckerService implements Checker
{
    public function isPalindrome(string $word) : bool
    {
        return false;
    }
    
    public function isAnagram(string $word, string $comparison) : bool
    {
        return true;
    }

    public function isPangram(string $phrase) : bool
    {
        return true;
    }
}