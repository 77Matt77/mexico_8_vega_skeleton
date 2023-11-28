<?php
namespace VegaCore\HttpKernel;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface HttpKernelInterface
{
    /**
     * Cette méthode du noyau lui permet de soumettre la requete du client pour traitement
     * et de retourner la réponse correspondant
     *
     * @param Request $request
     * @return Response
     */
    public function handle(Request $request): Response;
}