<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AikidoController extends AbstractController
{
    /**
     * @Route("/aikido", name="aikido")
     */
    public function index()
    {
        return $this->render('aikido/index.html.twig', [
            'controller_name' => 'AikidoController',
        ]);
    }
}
