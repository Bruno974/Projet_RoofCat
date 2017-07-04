<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 04/07/2017
 * Time: 16:14
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LegalController extends Controller
{
    /**
     * @Route("/mentions_legales", name="mentions_legales")
     */
    public function legalAction()
    {
        return $this->render('Legal/legal.html.twig');
    }
}