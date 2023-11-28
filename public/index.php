<?php


/**
     * -----------------------------------------------------------------------------------
     *                                 Bienvenue sur Véga
     * 
     * L'index.php, le contrôleur frontal.
     * 
     * Ses rôles:
     *      1- Amorcer l'application (Charger les fichiers de configuration)
     *      2- Créer une nouvelle instance du noyau de l'application
     *      3- Récupérer les données de la requête du client
     *      4- Demander au noyau de soumettre la requête du client pour traitement
     *      5- Récupérer de la part du noyau, la réponse correspondante à la requête
     *      6- Envoyer cette réponse au serveur
     *          * Afin que le serveur l'envoi dans le navigateur du client
     *          * Afin qu'elle soit affichée sur son écran
     * -----------------------------------------------------------------------------------
     */

use App\Kernel;
use Symfony\Component\HttpFoundation\Request;

    //1- Amorçage de l'application (charger les fichiers de configuration );
     require __Dir__ ."/../config/bootstrap.php";

     // echo c;

     //2- Créer une nouvelle instance du noyau de l'application
   $Kernel = new Kernel($container);

   //3- Récupérer les données de la requête du client
   $request = Request::createFromGlobals();

   //4- Demander au noyau de soumettre la requête du client pour traitement
   //5- Récupérer de la part du noyau, la réponse correspondante à la requête
   $response = $Kernel->handle($request);

   //6- Envoyer cette réponse au serveur
   //Si le requetr du client n'est pas faite via le terminal
   if (php_sapi_name() != "cli"){
      $response->send();
   }
  
     