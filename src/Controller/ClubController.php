<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/club")
 */
class ClubController extends AbstractController
{
    /**
     * @Route("/historique", name="historique")
     */
    public function historique(): Response
    {
        return $this->render('club/historique.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }

    /**
     * @Route("/organigramme", name="organigramme")
     */
    public function organigramme(): Response
    {
        return $this->render('club/organigramme.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }

    /**
     * @Route("/infrastructure", name="infrastructure")
     */
    public function infrastructure(): Response
    {
        return $this->render('club/infrastructure.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }

    /**
     * @Route("/tarif-et-inscription", name="tarifInscription")
     */
    public function tarifInscription(): Response
    {
        return $this->render('club/tarifInscription.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }
    /**
     * @Route("/programme-educatif-federal-pef-", name="pef")
     */
    public function pef(): Response
    {
        return $this->render('club/pef.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }
}
