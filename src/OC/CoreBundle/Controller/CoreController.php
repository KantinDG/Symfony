<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class CoreController extends Controller
{
	public function homeAction()
	{

		// Notre liste d'annonce en dur
		$listAdverts = array(
			array(
				'title'   => 'Recherche développpeur Symfony',
				'id'      => 1,
				'author'  => 'Alexandre',
				'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
				'date'    => new \Datetime()),
			array(
				'title'   => 'Mission de webmaster',
				'id'      => 2,
				'author'  => 'Hugo',
				'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
				'date'    => new \Datetime()),
			array(
				'title'   => 'Offre de stage webdesigner',
				'id'      => 3,
				'author'  => 'Mathieu',
				'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
				'date'    => new \Datetime())
		);

		return $this->render('OCCoreBundle:Core:home.html.twig', array(
			'listAdverts' => $listAdverts
		));
	}

	public function contactAction(Request $request)
	{
		$session = $request->getSession();

		$session->getFlashBag()->add('info', "Nous n'avons pas encore de page contact");
		return $this->redirectToRoute('oc_core_home');
	}

}
