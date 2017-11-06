<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AdvertRepository extends EntityRepository
{
	public function myFindAllDemo()
	{
		// Methode 1 : en passant par l'Entity Manager
		$queryBuuilder = $this->_em->createQueryBuilder()
			->select('a')
			->from($this->_entityName, 'a')
		;

		// Dans un repository, $this->_entityName est le namespace de l'entite geree
		// Ici, il vaut donc OC\PlatformBundle\Entity\Advert


		// Methode 2 : en passant par le raccourci (recommande)
		$queryBuilder = $this->createQueryBuilder('a');

		// On n'ajoute pas de critere ou tri particulier, la contruction de
		// notre requete est finie

		// On recupere la Query a partir du QueryBuilder
		$query = $queryBuilder->getQuery();

		// On recupere les resultat a partir de lq Query
		$resultat = $query->getResult();

		// On retourne les resultats
		return $results;
	}

	public function myFindAll()
	{
		return $this
			->createQueryBuilder('a');
			->getQuery()
			->getResult()
		;
	}
}
