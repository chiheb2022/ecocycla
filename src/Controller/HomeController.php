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

    #[Route('/produits', name: 'produits')]
    public function produits(): Response
    {
        return $this->render('front_office/produits.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('front_office/blog.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        return $this->render('front_office/login.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/profile', name: 'profile')]
    public function profile(): Response
    {
        return $this->render('front_office/profile.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/panier', name: 'panier')]
    public function panier(): Response
    {
        return $this->render('front_office/panier.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }







}
