<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ActController extends AbstractController
{
    /**
     * @Route("/act", name="act")
     */
    public function index()
    {
        return $this->render('act/index.html.twig', [
            'controller_name' => 'ActController',
        ]);
    }
}
