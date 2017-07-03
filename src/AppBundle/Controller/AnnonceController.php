<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 02/07/2017
 * Time: 19:34
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AnnonceController extends Controller
{
    /**
     * @Route("/annonces_trouvees/{departement}/{page}", name="annonceTrouve", defaults={"page" = 1})
     */
    public function trouveAction($departement,$page)
    {
        return $this->render('Annonce/annonce.html.twig');
    }

    /**
     * @Route("/annonces_perdues/{departement}/{page}", name="annoncePerdu", defaults={"page" = 1})
     */
    public function perduAction($departement,$page)
    {
        return $this->render('Annonce/annonce.html.twig');
    }
}