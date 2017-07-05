<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 05/07/2017
 * Time: 10:34
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AppBundle:Annonce')->findAll();

        return $this->render('Admin/admin.html.twig', array('annonces' => $annonces));
    }

}