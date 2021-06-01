<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheatsheetsJsController extends AbstractController
{
    /**
     * @Route("/cheatsheets/js", name="cheatsheets_js")
     */
    public function index(): Response
    {
        return $this->render('cheatsheets_js/index.html.twig', [
            'controller_name' => 'CheatsheetsJsController',
        ]);
    }
}
