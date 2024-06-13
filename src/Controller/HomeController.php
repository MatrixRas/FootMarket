<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    public function index(): Response
    {

        $cards = [
            [
                'name' => 'Joueur 1',
                'image' => '/image/joueur-1.png',
                'description' => 'Description du joueur 1.',
            ],
            [
                'name' => 'Joueur 2',
                'image' => '/image/joueur-2.png',
                'description' => 'Description du joueur 2.',
            ],
            [
                'name' => 'Joueur 3',
                'image' => '/image/joueur-3.png',
                'description' => 'Description du joueur 3.',
            ],
        ];        

        // donnée temporaire

        $club = [
            ['name' => 'Club 1',
             'image' => '/image/club/1.png',
             'description' => 'Description du club 1.',
             'money' => 'dollar'],
            ['name' => 'Club 2',
             'image' => '/image/club/2.png',
             'description' => 'Description du club 2.',
             'money' => 'dollar'],
            ['name' => 'Club 3',
             'image' => '/image/club/3.png',
             'description' => 'Description du club 3.',
             'money' => 'dollar'],
            ['name' => 'Club 4',
             'image' => '/image/club/4.png',
             'description' => 'Description du club 4.',
             'money' => 'dollar'],
            ['name' => 'Club 5',
             'image' => '/image/club/5.png',
             'description' => 'Description du club 5.',
             'money' => 'dollar'],
            ['name' => 'Club 6',
             'image' => '/image/club/6.png',
             'description' => 'Description du club 6.',
             'money' => 'dollar'],
            ['name' => 'Club 7',
             'image' => '/image/club/7.png',
             'description' => 'Description du club 7.',
             'money' => 'dollar'],
            ['name' => 'Club 8',
             'image' => '/image/club/8.png',
             'description' => 'Description du club 8.',
             'money' => 'dollar'],
            ['name' => 'Club 9',
             'image' => '/image/club/9.png',
             'description' => 'Description du club 9.',
             'money' => 'dollar'],
            ['name' => 'Club 10',
             'image' => '/image/club/10.png',
             'description' => 'Description du club 10.',
             'money' => 'dollar'],
            ['name' => 'Club 11',
             'image' => '/image/club/11.png',
             'description' => 'Description du club 11.',
             'money' => 'dollar'],
            ['name' => 'Club 12',
             'image' => '/image/club/12.png',
             'description' => 'Description du club 12.',
             'money' => 'dollar'],
            ['name' => 'Club 13',
             'image' => '/image/club/13.png',
             'description' => 'Description du club 13.',
             'money' => 'dollar'],
            ['name' => 'Club 14',
             'image' => '/image/club/14.png',
             'description' => 'Description du club 14.',
             'money' => 'dollar'],
            ['name' => 'Club 15',
             'image' => '/image/club/15.png',
             'description' => 'Description du club 15.',
             'money' => 'dollar'],
            ['name' => 'Club 16',
             'image' => '/image/club/16.png',
             'description' => 'Description du club 16.',
             'money' => 'dollar']
        ];
        


        
        return $this->render('default/home.html.twig', [
            'controller_name' => 'HomeController', 
            'cards'=>$cards ,
            'clubs'=>$club,
        ]);
    }
}

