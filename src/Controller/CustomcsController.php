<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomcsController extends AbstractController
{
    /**
     * @Route("/customcs", name="custom_cs")
     */
    public function index(): Response
    {
        return $this->render('customcs/index.html.twig', [
            'controller_name' => 'CustomcsController',
        ]);
    }
}
