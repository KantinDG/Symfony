<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller {

	public function viewSlugAction($slug,$year,$format)
	{
		return new Response(
			"On pourrait afficher l'annonce aurespondant au
			slug '".$slug."', crée en ".$year." et au format ".$format."."
		);
	}

	public function viewAction($id) {
		return new Response("Afficage de l'annonce d'id ".$id);
	}

	public function indexAction() {
		$content = $this
			->get('templating')
			->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'Kantin'));
		return new Response($content);
	}
}
