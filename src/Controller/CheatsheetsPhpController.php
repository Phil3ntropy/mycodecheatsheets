<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheatsheetsPhpController extends AbstractController
{
    /**
     * @Route("/cheatsheets/php", name="cheatsheets_php")
     */
    public function index(): Response
    {
        return $this->render('cheatsheets_php/index.html.twig', [
            'controller_name' => 'CheatsheetsPhpController',
        ]);
    }
}
