<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\AdvertSkill;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdvertController extends Controller
{
  public function indexAction($page)
  {
    // On retour une erreur 404 si la page n'existe pas
    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    // Nombre d'annonce par page fixe arbitrairement
    $nbPerPage = 3;

    // On recupere notre objet paginator
    $listAdverts = $this->getDoctrine()
      ->getmanager()
      ->getRepository('OCPlatformBundle:Advert')
      ->getAdverts($page, $nbPerPage)
    ;

    // On calcul le nombre total de page grace au cout($listAdverts) qui retourne le nombre total d'annonces
    $nbPages = ceil(count($listAdverts) / $nbPerPage);


    if ($page > $nbPages) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts,
      'nbPages'     => $nbPages,
      'page'        => $page,
    ));
  }

  public function viewAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
    // ou null si l'id $id n'existe pas, d'où ce if :
    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // On avait déjà récupéré la liste des candidatures
    $listApplications = $em
      ->getRepository('OCPlatformBundle:Application')
      ->findBy(array('advert' => $advert))
    ;

    // On récupère maintenant la liste des AdvertSkill
    $listAdvertSkills = $em
      ->getRepository('OCPlatformBundle:AdvertSkill')
      ->findBy(array('advert' => $advert))
    ;

    return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'advert'           => $advert,
      'listApplications' => $listApplications,
      'listAdvertSkills' => $listAdvertSkills,
    ));
  }

  public function addAction(Request $request)
  {

    // Création de l'entité
    $advert = new Advert();



    $form = $this->get('form.factory')->createBuilder(FormType::class, $advert)
      // On ajout les champs de l'entite que l'on veut a notre formulaire
      ->add('date',       DateType::class)
      ->add('title',      TextType::class)
      ->add('content',    TextareaType::class)
      ->add('author',     TextType::class)
      ->add('published',  CheckboxType::class, array('required' => false))
      ->add('save',       SubmitType::class)
    // On genere le formulaire a partir du formBuilder
      ->getForm()
    ;

    // Si la requete est en POST
    if($request->isMethod('POST'))
    {
      $form->handleRequest($request);

      if ($form->isValid())
      {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        // Persiste et flush
        $em->persist($advert);
        $em->flush();
        // Puis on redirige vers la page de visualisation de cette annonce
        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
      }
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
      'form' => $form->createView()
    ));
  }

  public function editAction($id, Request $request)
  {

    // On récupère l'annonce $id
    $advert = $this->getDoctrine()
      ->getmanager()
      ->getRepository('OCPlatformBundle:Advert')
      ->find($id)
    ;

    // Si l'annonce n'existe alors je retourne une erreur 404
    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    $form = $this->get('form.factory')->createBuilder(FormType::class, $advert)
      ->add('date',       DateType::class)
      ->add('title',      TextType::class)
      ->add('content',    TextareaType::class)
      ->add('author',     TextType::class)
      ->add('published',  CheckboxType::class, array('required' => false))
      ->add('save',       SubmitType::class)
      // On genere le formulaire
      ->getForm()
    ;


    if ($request->isMethod('POST')) {
      $form->handleRequest($request);

      if($form->isValid()) {
        // On recupere le repository
        $em = $this->getDoctrine()->getManager();
        // On déclenche l'enregistrement
        $em->flush();
      }
      // On affiche un message flash
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

      // On redirige vers l'annonce modifie
      return $this->redirectToRoute('oc_platform_view', array('id' => $id));
    }

    return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
      'advert'  => $advert,
      'form'    => $form->createView()
    ));
  }

  public function deleteAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // On boucle sur les catégories de l'annonce pour les supprimer
    foreach ($advert->getCategories() as $category) {
      $advert->removeCategory($category);
    }

    // Pour persister le changement dans la relation, il faut persister l'entité propriétaire
    // Ici, Advert est le propriétaire, donc inutile de la persister car on l'a récupérée depuis Doctrine

    // On déclenche la modification
    $em->flush();

    return $this->render('OCPlatformBundle:Advert:delete.html.twig');
  }

  public function menuAction($limit)
  {

    $em = $this->getDoctrine()->getManager();
    // Je recupere les $limit dernieres annonces
    $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->findBy(array(), array('id' => 'DESC'), $limit, 0);

    return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe les variables nécessaires au template !
      'listAdverts' => $listAdverts
    ));
  }
}
