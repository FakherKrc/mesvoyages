<?php

namespace App\Controller;

use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function index(): Response
    {
        $visites = $this->repository->findAllOrderBy('datecreation', 'DESC');
    return $this->render("pages/Voyages.html.twig", ['visites' => $visites]);
            
    }
    
    /**
     * @Route("/Voyages/tri/{champ}/{ordre}", name="voyages.sort")
     * @param type $champ
     * @param type $ordre
     * @return Response
     */
    public function sort($champ, $ordre): Response
    {
        $visites = $this->repository->findAllOrderBy($champ, $ordre);
    return $this->render("pages/Voyages.html.twig", ['visites' => $visites]);
        
    }
    
    /**
     * @Route("/Voyages/recherche/{champ}", name = "voyages.findallequal")
     * @param type $champ
     * @param Request $request
     * @return Response
     */
    public function findAllEqual($champ, Request $request): Response{
        $valeur = $request->get("recherche");
        $visites = $this->repository->findByEqualValue($champ, $valeur);
        return $this->render("pages/Voyages.html.twig", [ 'visites' => $visites]);
          
        
    }
}
