<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

class AnnonceRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAnnoncesRecentes()
    {
        return $query = $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(2)
            ->setFirstResult(1)
            ->getQuery()
            ->getResult();
    }

    public function findDerniereAnnonce()
    {
        return $query = $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getSingleResult();
    }

    public function findAllTouverParDepartement($idDepartement, $page, $nbreParPage)
    {

        $query = $this->createQueryBuilder('a')
            ->where('a.departement = :idDepartement')
            ->setParameter('idDepartement', $idDepartement)
            ->andWhere('a.categorie = 1 ')
            ->getQuery()
            ->setFirstResult(($page-1) * $nbreParPage) //On définit l'article à partir duquel commencer la liste
            ->setMaxResults($nbreParPage); //Le nombre d'épisode à afficher sur une page

        return new Paginator($query, true);
    }
}
