<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComposantsController extends AbstractController
{
    #[Route('/composants', name: 'composants')]
    public function index(): Response
    {
        return $this->render('composants/composants.html.twig', [
            'controller_name' => 'ComposantsController',
        ]);
    }
}
