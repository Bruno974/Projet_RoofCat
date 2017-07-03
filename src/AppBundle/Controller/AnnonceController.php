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
    const NBRE_PAR_PAGE = 1;

    /**
     * @Route("/annonces_trouvees/{departement}/{page}", name="annonceTrouve", defaults={"page" = 1})
     */
    public function trouveAction($departement,$page)
    {
        $categorie = 1;

        if ($page < 1)
        {
            throw $this->createNotFoundException("La page " . $page . " n'existe pas.");
        }

        $annonces = $this->getDoctrine()->getManager()->getRepository('AppBundle:Annonce')->findAllTouverParDepartement($departement, $page, self::NBRE_PAR_PAGE);

        $nbPages = ceil(count($annonces) / self::NBRE_PAR_PAGE);

        if ($page > $nbPages)
        {
            throw $this->createNotFoundException("La page " . $page . " n'existe pas.");
        }

        return $this->render('Annonce/annonce.html.twig', array('annonces' => $annonces,  'nbPages' => $nbPages,
            'page' => $page, 'departement' => $departement, 'categorie' => $categorie ));
    }

    /**
     * @Route("/annonces_perdues/{departement}/{page}", name="annoncePerdu", defaults={"page" = 1})
     */
    public function perduAction($departement,$page)
    {
        return $this->render('Annonce/annonce.html.twig');
    }
}