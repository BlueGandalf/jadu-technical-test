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
    #[Route('/palindrome/{testWord}', name: 'test_palindrome', methods: ["GET", "POST"], requirements: ['testWord' => '\w+'])]
    public function testIfPalindrome(Request $request, CheckerService $checkerService, ?string $testWord = null): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/anagram/{testWord}/{comparison}', name: 'test_anagram', methods: ["GET", "POST"], requirements: ['testWord' => '\w+', 'comparison' => '\w+'])]
    public function testIfAnagram(Request $request, CheckerService $checkerService, ?string $testWord = null, ?string $comparison = null): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/pangram', name: 'test_pangram', methods: ["GET", "POST"])]
    public function testIfPangram(Request $request, CheckerService $checkerService): Response
    {
        return $this->render('index.html.twig');
    }
}
