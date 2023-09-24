<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Checker;

class StringCheckerController extends AbstractController
{
    private $checkerService;

    public function __construct(Checker $checkerService)
    {
        $this->checkerService = $checkerService;
    }

    #[Route('/is-palindrome/{word}', name: 'is-palindrome')]
    public function isPalindrome($word): JsonResponse {
        return $this->json([
            "service_response" => $this->checkerService->isPalindrome($word)
        ]);
    }

    #[Route('/is-anagram/{word1}/{word2}', name: 'is-anagram')]
    public function isAnagram($word1, $word2) : JsonResponse {
        return $this->json([
            "service_response" => $this->checkerService->isAnagram($word1, $word2)
        ]);
    }

    #[Route('/is-pangram/{phrase}', name: 'is-pangram')]
    public function isPangram($phrase): JsonResponse {
        return $this->json([
            "service_response" => $this->checkerService->isPangram($phrase)
        ]);
    }
}
