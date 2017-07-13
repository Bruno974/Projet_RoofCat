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

    /**
     * @Route("/carte_chercher", name="carteChercher")
     */
    public function chercherCarteAction()
    {
        return $this->render('Annonce/chercher.html.twig');
    }

}
