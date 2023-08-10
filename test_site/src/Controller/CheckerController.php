<?php

namespace App\Controller;

use App\Service\CheckerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckerController extends AbstractController
{
    #[Route('/test/palindrome/{testWord}', name: 'test_palindrome', methods: ["GET", "POST"], requirements: ['testWord' => '\w+'])]
    public function testIfPalindrome(CheckerService $checkerService, string $testWord = null): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/test/anagram/{testWord}', name: 'test_anagram', methods: ["GET", "POST"], requirements: ['testWord' => '\w+'])]
    public function testIfAnagram(CheckerService $checkerService, string $testWord = null): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/test/pangram/{testWord}', name: 'test_pangram', methods: ["GET", "POST"], requirements: ['testWord' => '\w+'])]
    public function testIfPangram(CheckerService $checkerService, string $testWord = null): Response
    {
        return $this->render('index.html.twig');
    }
}
