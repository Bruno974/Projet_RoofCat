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
            //clé privée
            $secret = "6LeGqiUTAAAAAE8A_zkDw_mGRnMeFwCdzRevmyYz";
            //Paramètre renvoyé par le recaptcha
            $response = $request->get('g-recaptcha-response');
            //On récupère l'IP de l'utilisateur
            $remoteip = $request->server->get('REMOTE_ADDR');
            $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
                . $secret
                . "&response=" . $response
                . "&remoteip=" . $remoteip ;

            $decode = json_decode(file_get_contents($api_url), true);

            if ($decode['success'] == true) {
                $this->handleImage($annonce);
                $em = $this->getDoctrine()->getManager();
                $em->persist($annonce);
                $em->flush();
                $request->getSession()->getFlashBag()->add('info', 'Votre annonce a bien été enregistré.');
                return $this->redirectToRoute('poster');
            }
            else
            {
                $request->getSession()->getFlashBag()->add('info', 'Votre annonce n\' a pas été posté. Pensez bien à cocher la case je ne suis pas un robot.');
                return $this->redirectToRoute('poster');
            }
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