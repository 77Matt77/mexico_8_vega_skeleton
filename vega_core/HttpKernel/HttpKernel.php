<?php
namespace VegaCore\HttpKernel;



use VegaCore\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class HttpKernel implements HttpKernelInterface {
      /**
     * Cette méthode du noyau lui permet de soumettre la requete du client pour traitement
     * et de retourner la réponse correspondant
     *
     * @param Request $request
     * @return Response
     */
    public function handle(Request $request): Response
    {
        $response = new Response(
            'Hello world',
            Response::HTTP_OK,
            ['content-type' => 'text/html']
        );
        return $response;
    }
}
