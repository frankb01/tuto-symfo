<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    /**
     * @Route("/gallery/club", name="club-gallery")
     */
    public function club()
    {
        return $this->render('gallery/club-gallery.html.twig', [
            'controller_name' => 'GalleryController',
        ]);
    }

    /**
     * @Route("/gallery/stage", name="stage-gallery")
     */
    public function stage()
    {
        return $this->render('gallery/stage-gallery.html.twig', [
            'controller_name' => 'GalleryController',
        ]);
    }

    /**
     * @Route("/gallery/vidz", name="vidz-gallery")
     */
    public function vidz()
    {
        return $this->render('gallery/vidz-gallery.html.twig', [
            'controller_name' => 'GalleryController',
        ]);
    }
}
