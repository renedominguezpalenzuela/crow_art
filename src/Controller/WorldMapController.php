<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WorldMapController extends AbstractController
{
    /**
     * @Route("/worldmap", name="world_map")
     */
    public function index()
    {
        return $this->render('world_map/index.html.twig', [
            'controller_name' => 'WorldMapController',
        ]);
    }
}
