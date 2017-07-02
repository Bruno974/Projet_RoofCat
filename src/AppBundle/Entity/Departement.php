<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DepartementRepository")
 */
class Departement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="departement_nom", type="string", length=255)
     */
    private $departementNom;

    /**
     * @var string
     *
     * @ORM\Column(name="departement_code", type="string", length=255)
     */
    private $departementCode;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set departementNom
     *
     * @param string $departementNom
     *
     * @return Departement
     */
    public function setDepartementNom($departementNom)
    {
        $this->departementNom = $departementNom;

        return $this;
    }

    /**
     * Get departementNom
     *
     * @return string
     */
    public function getDepartementNom()
    {
        return $this->departementNom;
    }

    /**
     * Set departementCode
     *
     * @param string $departementCode
     *
     * @return Departement
     */
    public function setDepartementCode($departementCode)
    {
        $this->departementCode = $departementCode;

        return $this;
    }

    /**
     * Get departementCode
     *
     * @return string
     */
    public function getDepartementCode()
    {
        return $this->departementCode;
    }
}

