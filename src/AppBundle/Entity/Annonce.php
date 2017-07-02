<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnonceRepository")
 */
class Annonce
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=10)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=60)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="signes", type="text")
     */
    private $signes;

    /**
     * @var string
     *
     * @ORM\Column(name="circonstances", type="text")
     */
    private $circonstances;

    /**
     * @var string
     *
     * @ORM\Column(name="identification", type="string", length=50)
     */
    private $identification;

    /**
     * @var string
     *
     * @ORM\Column(name="sterilisation", type="string", length=5)
     */
    private $sterilisation;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var int
     *
     * @ORM\Column(name="mobile", type="integer")
     */
    private $mobile;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Annonce
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Annonce
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set age
     *
     * @param string $age
     *
     * @return Annonce
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set signes
     *
     * @param string $signes
     *
     * @return Annonce
     */
    public function setSignes($signes)
    {
        $this->signes = $signes;

        return $this;
    }

    /**
     * Get signes
     *
     * @return string
     */
    public function getSignes()
    {
        return $this->signes;
    }

    /**
     * Set circonstances
     *
     * @param string $circonstances
     *
     * @return Annonce
     */
    public function setCirconstances($circonstances)
    {
        $this->circonstances = $circonstances;

        return $this;
    }

    /**
     * Get circonstances
     *
     * @return string
     */
    public function getCirconstances()
    {
        return $this->circonstances;
    }

    /**
     * Set identification
     *
     * @param string $identification
     *
     * @return Annonce
     */
    public function setIdentification($identification)
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * Get identification
     *
     * @return string
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Set sterilisation
     *
     * @param string $sterilisation
     *
     * @return Annonce
     */
    public function setSterilisation($sterilisation)
    {
        $this->sterilisation = $sterilisation;

        return $this;
    }

    /**
     * Get sterilisation
     *
     * @return string
     */
    public function getSterilisation()
    {
        return $this->sterilisation;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Annonce
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set mobile
     *
     * @param integer $mobile
     *
     * @return Annonce
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return int
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}

