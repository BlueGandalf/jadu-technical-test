<?php

namespace App\Controller;

use App\Service\CheckerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/test')]
class CheckerController extends AbstractController
{
    #[Route('/palindrome', name: 'test_palindrome', methods: ["GET", "POST"])]
    public function testIfPalindrome(Request $request, CheckerService $checkerService): Response
    {
        $testWord = $request->get("testWord");
        
        $params = [];
        if ($testWord)
        {
            $params["result"] = [
                "word" => $testWord,
                "isPalindrome" => $checkerService->isPalindrome($testWord),
            ];
        }

        return $this->render('Test/palindrome.html.twig', $params);
    }

    #[Route('/anagram', name: 'test_anagram', methods: ["GET", "POST"])]
    public function testIfAnagram(Request $request, CheckerService $checkerService): Response
    {
        $firstWord = $request->get("testWord1");
        $secondWord = $request->get("testWord2");

        $params = [];
        if ($firstWord && $secondWord)
        {
            $params["result"] = [
                "word1" => $firstWord,
                "word2" => $secondWord,
                "isAnagram" => $checkerService->isAnagram($firstWord, $secondWord),
            ];
        }

        return $this->render('Test/anagram.html.twig', $params);
    }

    #[Route('/pangram', name: 'test_pangram', methods: ["GET", "POST"])]
    public function testIfPangram(Request $request, CheckerService $checkerService): Response
    {
        $testPhrase = $request->get("testPhrase");

        $params = [];
        if ($testPhrase)
        {
            $params["result"] = [
                "phrase" => $testPhrase,
                "isPangram" => $checkerService->isPangram($testPhrase),
            ];
        }

        return $this->render('Test/pangram.html.twig', $params);
    }
}
