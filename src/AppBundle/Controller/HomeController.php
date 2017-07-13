<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 01/07/2017
 * Time: 19:03
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction()
    {
        $derniereAnnonce = $this->getDoctrine()->getManager()->getRepository('AppBundle:Annonce')->findDerniereAnnonce();
        $annoncesRecentes = $this->getDoctrine()->getManager()->getRepository('AppBundle:Annonce')->findAnnoncesRecentes();
        return $this->render('Accueil/accueil.html.twig', array('annoncesRecentes' => $annoncesRecentes, 'annonceDerniere' => $derniereAnnonce));
    }
}
