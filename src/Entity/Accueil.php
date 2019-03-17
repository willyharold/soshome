<?php

namespace App\Entity;

use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccueilRepository")
 */
class Accueil
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionFr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionEn;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media",  cascade={"all"})
     */
    private $banniere1;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", cascade={"all"})
     */
    private $banniere2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titreFR;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titreEN;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getBanniere1(): ?Media
    {
        return $this->banniere1;
    }

    public function setBanniere1(?Media $banniere1): self
    {
        $this->banniere1 = $banniere1;

        return $this;
    }

    public function getBanniere2(): ?Media
    {
        return $this->banniere2;
    }

    public function setBanniere2(?Media $banniere2): self
    {
        $this->banniere3 = $banniere2;

        return $this;
    }

    public function getDescriptionFr(): ?string
    {
        return $this->descriptionFr;
    }

    public function setDescriptionFr(string $descriptionFr): self
    {
        $this->descriptionFr = $descriptionFr;

        return $this;
    }

    public function getDescriptionEn(): ?string
    {
        return $this->descriptionEn;
    }

    public function setDescriptionEn(string $descriptionEn): self
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    public function getTitreFR(): ?string
    {
        return $this->titreFR;
    }

    public function setTitreFR(string $titreFR): self
    {
        $this->titreFR = $titreFR;

        return $this;
    }

    public function getTitreEN(): ?string
    {
        return $this->titreEN;
    }

    public function setTitreEN(string $titreEN): self
    {
        $this->titreEN = $titreEN;

        return $this;
    }
}
