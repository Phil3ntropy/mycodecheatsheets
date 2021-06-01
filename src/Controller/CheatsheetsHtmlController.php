<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheatsheetsHtmlController extends AbstractController
{
    /**
     * @Route("/cheatsheets/html", name="cheatsheets_html")
     */
    public function index(): Response
    {
        return $this->render('cheatsheets_html/index.html.twig', [
            'controller_name' => 'CheatsheetsHtmlController',
        ]);
    }
}
