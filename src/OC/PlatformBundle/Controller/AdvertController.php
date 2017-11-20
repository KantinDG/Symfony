<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\AdvertSkill;
use OC\PlatformBundle\Entity\Skill;
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
		// On recupere entity manager
		$em = $this->getDoctrine()->getManager();
		// On recuper le repository
		$repository = $em->getRepository('OCPlatformBundle:Advert');

		// On récupère l'entité correspondate a l'id $id
		$advert = $repository->find($id);

		// $advert est une instance de OC\PlatformBundle\Entity\Advert
		// ou null si l'id $id n'existe pas
		if (null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id $id n'existe pas.");
		}

		// On recupere la liste des candidature de cette annonce
		$listApplication = $em
			->getRepository('OCPlatformBundle:Application')
			->findBy(array('advert' => $advert))
		;

		$listAdvertSkills = $em
			->getRepository('OCPlatformBundle:AdvertSkill')
			->findBy(array('advert' => $advert))
		;

		return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
			'advert' 			=> $advert,
			'listApplication' 	=> $listApplication,
			'listAdvertSkills' 	=> $listAdvertSkills
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

		// Recuperation de l'Entity Manager
		$em = $this->getDoctrine()->getmanager();

		//Création de l'entité
		$advert = new Advert();
		$advert->setTitle('Recherche développeur Symfony.');
		$advert->setAuthor('Alexandre');
		$advert->setContent('Nous cherchons un développeur Symfony débutant sur Lyon. blabla...');

		//Création de l'entité Image
		$image = new Image();
		$image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
		$image->setAlt('Job de rêve');

		//On lie l'image a l'annonce
		$advert->setImage($image);

		//Création d'une première candidature
		$application1 = new Application();
		$application1->setAuthor('Pierre');
		$application1->setContent('Je suis très motivé.');

		// Création d'une deuièxme candidature
		$application2 = new Application();
		$application2->setAuthor('Marine');
		$application2->setContent('J\'ai toutes les qualités requises.');

		// On Lie les candiatures a l'annonce
		$application1->setAdvert($advert);
		$application2->setAdvert($advert);

		// On recupere toutes les co;petences possibles
		$listSkills = $em->getRepository('OCPlatformBundle:Skill')->findAll();

		// Pour chaque competence
		foreach ($listSkills as $skill) {
			// On cree une nouvelle "relation entre 1 annonce et 1 competence"
			$advertSkill = new AdvertSkill();

			// On la lie a l'annonce, qui est ici toujours la meme
			$advertSkill->setAdvert($advert);

			// On la lie a la competence, qui change ici dans la boucle foreach
			$advertSkill->setSkill($skill);

			// Arbitrairement, On dit que chaque competence est requise au niveau 'Expert'
			$advertSkill->setLevel('Expert');

			// On persiste cette entite de la relation qui est proprietaire des deux autres
			$em->persist($advertSkill);
		}

		// On "persiste" l'entité qui va prendre en cascade l'image
		// mais pas les candidatures
		$em->persist($advert);

		// On persiste a la main les candidature car la relation est
		// dans l'autre sens
		$em->persist($application1);
		$em->persist($application2);

		// On flush tout ce qui est persisté
		// Advert
		// L'image (par cascade avec advert)
		// Les 2 candidatures
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

		// Ici, on récupere l'entity manager
		$em = $this->getDoctrine()->getManager();

		// On recupere l'annonce $id
		$advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

		if(null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id $id n'existe pas.");
		}

		// la methode findAll retourne toutes les categories de la base de donne
		$listCategories = $em->getRepository('OCPlatformBundle:Category')->findAll();

		// On boucle sur les categories pour les lier a l'annonce
		foreach ($listCategories as $category) {
			$advert->addCategory($category);
		}

		// Pour persiste le changement dans la relation, il faut persister l'entit2 proprietqire
		// Ici, Advert est le propietaire, donc inutile de la persister car on l'a importer depuis Doctrine
		$em->flush();

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
		$em = $this->getDoctrine()->getmanager();

		// Ici, on récupérera l'annonce correspondant à $id
		$advert = $em->getRepository("OCPlatformBundle:Advert")->find($id);

		if(null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id $id n'existe pas.");
		}

		// On boucle sur les categorie de l'annonce pour les supprimer
		foreach($advert->getCategories() as $category) {
			$advert->removeCategory($category);
		}

		// Pour persiste le changement dans la relation, il faut persister l'entit2 proprietqire
		// Ici, Advert est le propietaire, donc inutile de la persister car on l'a importer depuis Doctrine
		$em->flush();

		// Ici, on gérera la suppression de l'annonce en question

		return $this->render('OCPlatformBundle:Advert:delete.html.twig');
	}

	public function menuAction()
	{
		// On fixe en dur une liste ici, bien entendu par la suite
		// on la récuperera depuis la BDD !
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('OCPlatformBundle:Advert')
		;



		$listAdverts = $repository->myFindAll();

		return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
			// Tout l'intétêt est ici : le contrôleur passe
			// les variables nécéssaires au templates !
			'listAdverts' => $listAdverts
		));
	}
}
