<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 04/07/2017
 * Time: 13:15
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Model\ContactModel;
use AppBundle\Form\Type\ContactType;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $formulaireContact = new ContactModel();
        $form = $this->get('form.factory')->create(ContactType::class, $formulaireContact);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {

            $secret = "6LeGqiUTAAAAAE8A_zkDw_mGRnMeFwCdzRevmyYz";
            $response = $request->get('g-recaptcha-response');
            $remoteip = $request->server->get('REMOTE_ADDR');
            $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
                . $secret
                . "&response=" . $response
                . "&remoteip=" . $remoteip ;

            $decode = json_decode(file_get_contents($api_url), true);

            if ($decode['success'] === true)
            {
                $this->get('mail')->sendContactMail($formulaireContact);
                $request->getSession()->getFlashBag()->add('info', 'Votre mail a bien été envoyé.');
                return $this->redirectToRoute('contact');
            }
            else
            {

                $request->getSession()->getFlashBag()->add('info', 'Votre mail n\' a pas été envoyé. Pensez bien à cocher la case je ne suis pas un robot.');
                return $this->redirectToRoute('contact');
            }
        }
        return $this->render('Contact/contact.html.twig', array('form' => $form->createView()));
    }

}
