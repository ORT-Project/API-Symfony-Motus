<?php

namespace App\Controller;

use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/theme')]
class ThemeController extends AbstractController
{
    #[Route('/', name: 'app_theme')]
    public function index(ThemeRepository $themeRepository, SerializerInterface $serializer): JsonResponse
    {
        $themes = $themeRepository->findAll();
        $jsonThemeList = $serializer->serialize($themes, 'json', ['groups' => 'getWords']);

        return new JsonResponse($jsonThemeList, Response::HTTP_OK, [], true);
    }

    #[Route('/alias/{id}', name: 'app_theme_alias')]
    public function getThemesByAlias(ThemeRepository $themeRepository,
                                     SerializerInterface $serializer, String $id): JsonResponse
    {
        $themes = $themeRepository->findByAlias($id);
        $jsonThemeList = $serializer->serialize($themes, 'json', ['groups' => 'getWords']);

        return new JsonResponse($jsonThemeList, Response::HTTP_OK, [], true);
    }
}