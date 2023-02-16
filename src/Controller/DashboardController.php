<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/admin', name: 'dashboard')]
    public function index(): Response
    {
        return $this->render('back_office/dashboard.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

}
