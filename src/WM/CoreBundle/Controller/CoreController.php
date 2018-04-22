<?php

namespace WM\CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CoreController extends Controller
{
  public function menuAction()
  {
	$listMenu = array(	
		  array('title' => "Revenir à l'accueil", 'path' => 'wm_core'),
		  array('title' => 'Voir les annonces', 'path' => 'wm_core_platform'),
		  array('title' => 'Accéder au forum','path' => 'wm_core_forum'),
		  array('title' => 'Nous contacter', 'path' => 'wm_core_contact')
		);
	return $this->render('@WMCore/Default/menu.html.twig',array('listMenu' => $listMenu));
	//return new Response("Notre propre Core System from homeAction !");
  }
  
 
  public function homeAction()
  {
		
	  return $this->render('@WMCore/Default/index.html.twig');
	  
  }
  
  public function forumAction(Request $request)
  {
      $session = $request->getSession();
		
      // info flash
	  $session->getFlashBag()->add('info', 'Le forum n’est pas encore disponible.');
	 
	  // retour page d'accueil
	  return $this->redirectToRoute('wm_core');
  }
  
  public function contactAction(Request $request)
  {
      $session = $request->getSession();
		
      // info flash
	  $session->getFlashBag()->add('info', 'La page de contact n’est pas encore disponible.');
	 
	  // retour page d'accueil
	  return $this->redirectToRoute('wm_core');
  }
 
}
