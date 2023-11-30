<?php
namespace App\Controller;

use AttributesRouter\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use VegaCore\AbstractController\AbstractController;

    class RegisterController extends AbstractController
    {
        #[Route('/register', name: 'app_register', methods: ['GET'])]
        public function register() : Response
        {
            return $this->render('register.html.twig');
        }
    }