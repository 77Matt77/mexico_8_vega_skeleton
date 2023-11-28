<?php

namespace App\Controller;

use Twig\Environment;
use AttributesRouter\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController
{
   private Environment $twig;
   public function __construct(Environment $twig){
      $this->twig = $twig;
   }
   #[Route('/', name: 'homepage', methods: ['GET', 'POST'])]
   public function home():response
   {
      $response = new Response(
         $this->twig->render("index.html.twig"),
         Response::HTTP_OK,
         ['content-type' => 'text/html']
     );
     return $response;
   }

   #[Route('/test', name: 'app_test', methods: ['GET', 'POST'])]
   public function test():response
   {
   $response = new Response(
         "<h1>page test</h1>",
         Response::HTTP_OK,
         ['content-type' => 'text/html']
     );
     return $response;
   }

   #[Route('/edit/{id}', name: 'app_edit', methods: ['GET'])]
   public function edit():response
   {
   $response = new Response(
            "Page edit: $id",
            Response::HTTP_OK,
            ['content-type' => 'text/html']
        );

        return $response;
   }

   #[Route('/article/{slug}/comment/{id<\d+>}', name: 'article-comment')]
   public function comment()
   {
   }
}