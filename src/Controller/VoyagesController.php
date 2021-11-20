<?php

namespace App\Controller;

use App\Repository\VisiteRepository;
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
     * 
     * @var VisiteRepository
     */
    private $repository;
    
    function __construct(VisiteRepository $repository) {
        $this->repository = $repository;
    }

    
    
    /**
     * @Route("/Voyages", name = "Voyages")
     * @return Response
     */
    public function index(): Response{
        $visites = $this->repository->findAll();
    return $this->render("pages/Voyages.html.twig", ['visites' => $visites]);
    
    
}
    
}
