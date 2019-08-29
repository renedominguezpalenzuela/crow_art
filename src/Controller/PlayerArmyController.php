<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlayerArmyController extends AbstractController
{
    /**
     * @Route("/playerarmy", name="player_army")
     */
    public function index()
    {
        return $this->render('player_army/index.html.twig', [
            'controller_name' => 'PlayerArmyController',
        ]);
    }
}
