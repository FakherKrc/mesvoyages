<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilController
 *
 * @author 33767
 */
class AccueilController extends AbstractController{
    
    /**
     * @Route("/", name = "acceuil")
     * @return Response
     */
    public function index(): Response{
    return new Response(render("pages/accueil.html.twig"));
}
    
}
