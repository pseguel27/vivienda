<?php

namespace Alienigena\ViviendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AlienigenaViviendaBundle:Default:index.html.twig');
    }
}
