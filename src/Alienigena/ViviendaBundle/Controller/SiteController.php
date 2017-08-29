<?php

namespace Alienigena\ViviendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('AlienigenaViviendaBundle:Site:base.html.twig');
    }
}
