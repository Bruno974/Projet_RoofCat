<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\Length(min=10, minMessage="Au moins 10 caractères et pas de chiffres.")
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Pas de chiffres.")
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
     * @ORM\Column(name="tatouage", type="string", length=60)
     * @Assert\Length(min=6, minMessage="Format 129ZEP ou ZEP129")
     */
    private $tatouage;

    /**
     * @var string
     *
     * @Assert\Length(min=10, minMessage="Les signes doivent faire au moins {{ limit }} caractères.")
     *
     * @ORM\Column(name="signes", type="text")
     */
    private $signes;

    /**
     * @var string
     *
     * @Assert\Length(min=10, minMessage="Les circonstances doivent faire au moins {{ limit }} caractères.")
     *
     * @ORM\Column(name="circonstances", type="text")
     */
    private $circonstances;

    /**
     * @var string
     *
     * @ORM\Column(name="identification", type="string", length=50)
     *
     * @Assert\Regex(
     *     pattern="/^[0-9]{15,}$/",
     *     match=true,
     *     message="15 chiffres - Pas de lettres - Pas de caractères spéciaux.")
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
     *
     * @Assert\Email(message = "Email '{{ value }}' n'est pas valide.")
     */
    private $mail;

    /**
     * @var int
     *
     * @ORM\Column(name="mobile", type="integer")
     *
     * @Assert\Length(min=9, minMessage="Le numéro doit faire au moins {{ limit }} caractères.")
     */
    private $mobile;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Race", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $race;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departement", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $departement;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categorie", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     *
     * @ORM\Column(name="image_url", type="text")
     */
    private $imageUrl;

    public function __construct()
    {
        $this->setDate(new \DateTime());
    }


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

    /**
     * Set race
     *
     * @param \AppBundle\Entity\Race $race
     *
     * @return Annonce
     */
    public function setRace(\AppBundle\Entity\Race $race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return \AppBundle\Entity\Race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set departement
     *
     * @param \AppBundle\Entity\Departement $departement
     *
     * @return Annonce
     */
    public function setDepartement(\AppBundle\Entity\Departement $departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \AppBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set categorie
     *
     * @param \AppBundle\Entity\Categorie $categorie
     *
     * @return Annonce
     */
    public function setCategorie(\AppBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \AppBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     *
     * @return Annonce
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set tatouage
     *
     * @param string $tatouage
     *
     * @return Annonce
     */
    public function setTatouage($tatouage)
    {
        $this->tatouage = $tatouage;

        return $this;
    }

    /**
     * Get tatouage
     *
     * @return string
     */
    public function getTatouage()
    {
        return $this->tatouage;
    }
}
