<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeComntrollerController extends AbstractController
{
    #[Route('/', name: 'app_home_comntroller')]
    public function index(): Response
    {
        return $this->render('home_comntroller/index.html.twig', [
            'controller_name' => 'HomeComntrollerController',
        ]);
    }
}
