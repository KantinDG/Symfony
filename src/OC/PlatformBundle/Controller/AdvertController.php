<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
	public function indexAction($page)
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

		// On ne sait pas combien de pages il y a
		// Mais on sait qu'une page doit être supérieure ou égale à 1
		// Si $page = "" je lui donne la valeur par défaut = 1
		$page = ($page == "") ? 1 : $page;
		if ($page < 1) {
			// On déclenche une exception NotFoundHttpException, cela va afficher
			// une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
			throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
		}

		// Ici, on récupérera la liste des annonces, puis on la passera au template

		// Mais pour l'instant, on ne fait qu'appeler le template
		return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
			'listAdverts' => $listAdverts
		));
	}

	public function viewAction($id)
	{
		// On récupere le repository
		$repository = $this->getDoctrine()
			->getmanager()
			->getRepository('OCPlatformBundle:Advert');

		// On récupère l'entité correspondate a l'id $id
		$advert = $repository->find($id);

		// $advert est une instance de OC\PlatformBundle\Entity\Advert
		// ou null si l'id $id n'existe pas
		if (null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id $id n'existe pas.");
		}

		return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
			'advert' => $advert
		));
	}

	public function addAction(Request $request)
	{
		// La gestion d'un formulaire est particulière, mais l'idée est la suivante :

		// Si la requête est en POST, c'est que le visiteur a soumis le formulaire
		// Récuperation du service antispam
		$antispam = $this->container->get('oc_platform.antispam');

		// $text = "Ceci est un text trop court";

		// if ($antispam->isSpam($text)) {
		// 	// throw new \Exception("Votre message a été détécté comme spam !");
		// 	$request->getSession()
		// 			->getFlashbag()
		// 			->add('danger', 'Votre message a été déteté comme spam !');
		// 	return $this->redirectToRoute('oc_platform_home');
		// }

		//Création de l'entité
		$advert = new Advert();
		$advert->setTitle('Recherche développeur Symfony.');
		$advert->setAuthor('Alexandre');
		$advert->setContent('Nous cherchons un développeur Symfony débutant sur Lyon. blabla...');
		// On peut ne pas définir ni la date ni la publication
		// car ces attributs sont définis automatiquement dans le contrsucteur

		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();

		// Etape 1 : On "persiste" l'entité
		$em->persist($advert);

		$em->flush();

		if ($request->isMethod('POST')) {
			// Ici, on s'occupera de la création et de la gestion du formulaire

			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

			// Puis on redirige vers la page de visualisation de cettte annonce
			return $this->redirectToRoute('oc_platform_view', array('id' => 5));
		}

		// Si on n'est pas en POST, alors on affiche le formulaire
		return $this->render('OCPlatformBundle:Advert:add.html.twig');
	}

	public function editAction($id, Request $request)
	{

		// Ici, on récupérera l'annonce correspondante à $id
		$advert = array(
			'title'		=> 'Recherche développpeur Symfony2',
			'id'		=> $id,
			'author'	=> 'Alexandre',
			'content'	=> 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
			'date'		=> new \Datetime()
		);

		// Même mécanisme que pour l'ajout
		if ($request->isMethod('POST')) {
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

			return $this->redirectToRoute('oc_platform_view', array('id' => 5));
		}

		return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
			'advert' => $advert
		));
	}

	public function deleteAction($id)
	{
		// Ici, on récupérera l'annonce correspondant à $id

		// Ici, on gérera la suppression de l'annonce en question

		return $this->render('OCPlatformBundle:Advert:delete.html.twig');
	}

	public function menuAction()
	{
		// On fixe en dur une liste ici, bien entendu par la suite
		// on la récuperera depuis la BDD !
		$listAdverts = array(
			array('id' => 2, 'title' => 'Recherche développeur Symfony'),
			array('id' => 5, 'title' => 'Mission de webmaster'),
			array('id' => 9, 'title' => 'Offre de stage en webdesigner')
		);

		return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
			// Tout l'intétêt est ici : le contrôleur passe
			// les variables nécéssaires au templates !
			'listAdverts' => $listAdverts
		));
	}
}
