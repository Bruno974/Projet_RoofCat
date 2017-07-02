<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CarteController extends Controller
{
    /**
     * @Route("/carte_trouver", name="carteTrouver")
     */
    public function trouverCarteAction()
    {
        return $this->render('Annonce/trouver.html.twig');
    }

}