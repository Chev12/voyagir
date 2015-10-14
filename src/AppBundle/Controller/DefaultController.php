<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}", name="homepage", requirements={
     *     "_locale": "en|fr"}, defaults={"_locale": "en"})
     */
    public function indexAction($_locale = null)
    {
        if($_locale != null)
        {
            $this->get('session')->set('_locale', $_locale);
        }
        return $this->render('landing/index.html.twig', array(
            'locale' => $_locale
        ));
    }
}
