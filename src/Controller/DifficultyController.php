<?php

namespace App\Controller;

use App\Repository\DifficultyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/difficulty')]
class DifficultyController extends AbstractController
{
    #[Route('/', name: 'app_difficulty')]
    public function index(DifficultyRepository $difficultyRepository, SerializerInterface $serializer): JsonResponse
    {
        $difficulties = $difficultyRepository->findAll();
        $jsonThemeList = $serializer->serialize($difficulties, 'json');

        return new JsonResponse($jsonThemeList, Response::HTTP_OK, [], true);
    }
}