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
            ->orderBy('a.id', 'DESC')
            ->getQuery()
            ->setFirstResult(($page-1) * $nbreParPage)
            ->setMaxResults($nbreParPage);

        return new Paginator($query, true);
    }

    public function findAllPerduParDepartement($idDepartement, $page, $nbreParPage)
    {
        $query = $this->createQueryBuilder('a')
            ->where('a.departement = :idDepartement')
            ->setParameter('idDepartement', $idDepartement)
            ->andWhere('a.categorie = 2 ')
            ->orderBy('a.id', 'DESC')
            ->getQuery()
            ->setFirstResult(($page-1) * $nbreParPage)
            ->setMaxResults($nbreParPage);

        return new Paginator($query, true);
    }
}
