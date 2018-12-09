<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LessonController extends AbstractController
{
    /**
     * @Route("/lesson", name="lesson")
     */
    public function index()
    {
        return $this->render('lesson/lesson.html.twig', [
            'controller_name' => 'LessonController',
        ]);
    }
}
