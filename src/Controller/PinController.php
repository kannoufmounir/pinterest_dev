<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Pin;





class PinController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // return $this->render('pin/index.html.twig', [
        //     'controller_name' => 'PinController',
        // ]);


     // 1 manaire pour afficher var_dump
        // $pin = new Pin;
        // var_dump($pin);
        // die;
        
     // 2 manaire pour afficher var_dump
        // $pin = new Pin;
        // dump($pin);
        // die;

       

        return $this->render('pin/index.html.twig');
    }
}
