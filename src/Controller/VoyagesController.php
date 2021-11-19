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
class VoyagesController extends AbstractController{
    
    /**
     * @Route("/Voyages", name = "Voyages")
     * @return Response
     */
    public function index(): Response{
    return $this->render("pages/Voyages.html.twig");
}
    
}
