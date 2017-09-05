<?php

namespace Alienigena\ViviendaBundle\Controller;

use Alienigena\ViviendaBundle\Entity\Publicacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        $em 	= $this->getDoctrine()->getManager();

        $publicaciones 	= $em->getRepository('AlienigenaViviendaBundle:Publicacion')
        							->findBy(array('estado' => 1), array('id' => 'ASC'));
        //$publicaciones=  (object) $publicaciones;
        //dump($publicaciones); exit;

        if (!$publicaciones) {
	        throw $this->createNotFoundException(
	            'No product found for id '.$publicaciones
		    );
		}

        return $this->render('AlienigenaViviendaBundle:Site:base.html.twig',array('publicaciones'=>$publicaciones));
    }
}