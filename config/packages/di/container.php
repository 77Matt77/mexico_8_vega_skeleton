<?php 

$builder = new DI\ContainerBuilder();
$builder->addDefinitions(__DIR__ .'/services.php');
$container = $builder->build();

return $container;