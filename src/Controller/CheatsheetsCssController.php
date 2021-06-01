<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheatsheetsCssController extends AbstractController
{
    /**
     * @Route("/cheatsheets/css", name="cheatsheets_css")
     */
    public function index(): Response
    {
        return $this->render('cheatsheets_css/index.html.twig', [
            'controller_name' => 'CheatsheetsCssController',
        ]);
    }
}
