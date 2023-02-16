<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('front_office/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/don', name: 'don')]
    public function don(): Response
    {
        return $this->render('front_office/don.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/collection', name: 'collection')]
    public function collection(): Response
    {
        return $this->render('front_office/collection.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


}
