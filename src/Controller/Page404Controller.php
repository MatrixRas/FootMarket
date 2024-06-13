<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Page404Controller extends AbstractController
{
    //#[Route('/page404', name: 'app_page404')]
    public function index(): Response
    {
        return $this->render('default/404.html.twig', [
            'controller_name' => 'Page404Controller',
        ]);
    }
}
