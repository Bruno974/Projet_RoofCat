<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 03/07/2017
 * Time: 14:21
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Annonce;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\AnnonceType;

class PosterController extends Controller
{
    /**
     * @Route("/poster_annonce", name="poster")
     */
    public function ecritureAction(Request $request)
    {
        $annonce = new Annonce();
        $form = $this->get('form.factory')->create(AnnonceType::class, $annonce);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {


            $this->handleImage($annonce);
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('accueil');
        }

        return $this->render('Poster/poster.html.twig', array('form' => $form->createView()));
    }

    private function handleImage(Annonce $annonce)
    {
        $file = $annonce->getImageUrl();
        $filename = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('pictures_directory'),$filename);
        $fileUrl = 'images/annoncesImages/' . $filename;
        $annonce->setImageUrl($fileUrl);
    }

}