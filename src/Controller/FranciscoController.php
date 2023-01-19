<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FranciscoController extends AbstractController
{
    #[Route('/', name: 'app_francisco')]
    public function index(): Response
    {
        return $this->render('francisco/home.html.twig', [
            'controller_name' => 'FranciscoController',
        ]);
    }
}
