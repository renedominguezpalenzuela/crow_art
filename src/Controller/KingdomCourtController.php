<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class KingdomCourtController extends AbstractController
{
    /**
     * @Route("/kingdomcourt", name="kingdom_court")
     */
    public function index()
    {
        return $this->render('kingdom_court/index.html.twig', [
            'controller_name' => 'KingdomCourtController',
        ]);
    }
}
