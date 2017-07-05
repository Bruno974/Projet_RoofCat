<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 05/07/2017
 * Time: 14:37
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class SupprimerController extends Controller
{
    /**
     * @Route("/supprimer-annonce/{id}", name="supprimer_annonce")
     */
    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('AppBundle:Annonce')->find($id);
        $em->remove($annonce);
        $em->flush();
        $request->getSession()->getFlashBag()->add('info', 'Annonce supprimée.');

        return $this->redirectToRoute('admin');
    }

}