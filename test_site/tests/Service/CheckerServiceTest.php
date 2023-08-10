<?php

namespace App\Tests\Service;

use App\Service\CheckerService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CheckerServiceTest extends KernelTestCase
{
    /** @var CheckerService */
    private $checkerService;

    public function testIsPalindromeProvidedTests(): void
    {
        $this->assertTrue($this->checkerService->isPalindrome("anna"));

        $this->assertFalse($this->checkerService->isPalindrome("Bark"));
    }
    
    public function testIsPalindromePhrase(): void
    {
        $this->assertTrue($this->checkerService->isPalindrome("Mr Owl ate my metal worm"));

        $this->assertFalse($this->checkerService->isPalindrome("The quick brown fox jumps over the lazy dog"));
    }
    
    public function testIsPalindromeSymbols(): void
    {
        $this->assertTrue($this->checkerService->isPalindrome("asdf;123.321;fdsa"));
        $this->assertTrue($this->checkerService->isPalindrome("☆❤worlddlrow❤☆"));
        $this->assertTrue($this->checkerService->isPalindrome(",./;'#';/.,"));

        $this->assertFalse($this->checkerService->isPalindrome("☆❤world"));
        $this->assertFalse($this->checkerService->isPalindrome(",./;'#"));
    }

    public function testIsPalindromeCapitalLetters(): void
    {
        $this->assertTrue($this->checkerService->isPalindrome("Anna"));
    }

    public function testIsAnagramProvidedTests(): void
    {
        $this->assertTrue($this->checkerService->isAnagram("coalface", "cacao elf"));

        $this->assertFalse($this->checkerService->isAnagram("coalface", "dark elf"));
    }

    public function testIsAnagramSymbols(): void
    {
        $this->assertTrue($this->checkerService->isAnagram("☆❤world", "dlrow❤☆"));
        $this->assertTrue($this->checkerService->isAnagram("][#';/.,", ",./;'#[]"));

        $this->assertFalse($this->checkerService->isAnagram("][#';/.,", "\!3$$%"));
    }

    public function testIsPangramProvidedTests(): void
    {
        $test1 = "The quick brown fox jumps over the lazy dog.";
        $this->assertTrue($this->checkerService->isPangram($test1));

        $test2 = "The British Broadcasting Corporation (BBC) is a British public
        service broadcaster.";
        $this->assertFalse($this->checkerService->isPangram($test2));
    }

    public function testIsPangramAdditionalTests(): void
    {
        $test1 = "AbCdEfGhIjKlMnOpQrStUvWxYz";
        $this->assertTrue($this->checkerService->isPangram($test1));

        $test2 = "AaaaaaaaaaaaaaAbCdEfGhIjKlMnOpQrStUvWxYz";
        $this->assertTrue($this->checkerService->isPangram($test2));
        
        $test3 = "!£$%^&*(   AbCdEfGhIjKlMnOpQrStUvWxYz";
        $this->assertTrue($this->checkerService->isPangram($test3));
        
        $test4 = "abcdefghijklmnopqrstuvwxy";
        $this->assertFalse($this->checkerService->isPangram($test4));

        $test5 = "!£$%^&*(  
            AbCdEfGhIjKlMnOp";
        $this->assertFalse($this->checkerService->isPangram($test5));
    }

    protected function setUp(): void
    {
        self::bootKernel();

        $container = static::getContainer();

        $this->checkerService = $container->get(CheckerService::class);
    }
}