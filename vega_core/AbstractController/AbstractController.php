<?php 
namespace VegaCore\AbstractController;
use twig;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

abstract class AbstractController{

    protected ContainerInterface $container;

    public function __construct(ContainerInterface $container){
        $this->container = $container;
    }
    public function render(string $templateName, array $params = []): Response
    {
        $twig = $this->container->get(Environment::class);

        $response = new Response(
            $twig->render($templateName, $params),
            Response::HTTP_OK,
            ['content-type' => 'text/html']
        );

        return $response;
    }
    }
