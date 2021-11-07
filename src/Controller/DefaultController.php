<?php

namespace App\Controller;

use App\Entity\Sponsor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function index(): Response
    {

        $sponsor = $this->getDoctrine()->getManager()->getRepository(Sponsor::class)->findAll();

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController', 'sponsors' => $sponsor
        ]);
    }
}
