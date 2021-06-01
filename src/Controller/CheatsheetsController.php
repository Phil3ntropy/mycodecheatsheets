<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheatsheetsController extends AbstractController
{
    /**
     * @Route("/cheatsheets", name="cs")
     */
    public function index(): Response
    {
        return $this->render('cheatsheets/index.html.twig', [
            'controller_name' => 'CheatsheetsController',
        ]);
    }
}
