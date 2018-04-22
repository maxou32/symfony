<?php

namespace WM\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
             return new Response("Notre propre Hello World !");
             //return $this->render('WMPlatformBundle:Default:index.html.twig');
    }
}
