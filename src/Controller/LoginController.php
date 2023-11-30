<?php
namespace App\Controller;

use AttributesRouter\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use VegaCore\AbstractController\AbstractController;

    class LoginController extends AbstractController
    {
        #[Route('/login', name: 'app_login', methods: ['GET'])]
        public function login() : Response
        {
            return $this->render('login.html.twig');
        }
    }