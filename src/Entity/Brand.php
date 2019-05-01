<?php

namespace App\Entity;

use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BrandRepository")
 */
class Brand
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
    private $titrefr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titreen;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionfr;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionen;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", inversedBy="brand", cascade={"persist", "remove"})
     */
    private $banniere;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", inversedBy="brand", cascade={"persist", "remove"})
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrefr(): ?string
    {
        return $this->titrefr;
    }

    public function setTitrefr(string $titrefr): self
    {
        $this->titrefr = $titrefr;

        return $this;
    }

    public function getTitreen(): ?string
    {
        return $this->titreen;
    }

    public function setTitreen(string $titreen): self
    {
        $this->titreen = $titreen;

        return $this;
    }

    public function getDescriptionfr(): ?string
    {
        return $this->descriptionfr;
    }

    public function setDescriptionfr(string $descriptionfr): self
    {
        $this->descriptionfr = $descriptionfr;

        return $this;
    }

    public function getDescriptionen(): ?string
    {
        return $this->descriptionen;
    }

    public function setDescriptionen(string $descriptionen): self
    {
        $this->descriptionen = $descriptionen;

        return $this;
    }

    public function getBanniere(): ?Media
    {
        return $this->banniere;
    }

    public function setBanniere(?Media $banniere): self
    {
        $this->banniere = $banniere;

        return $this;
    }

    public function getImage(): ?Media
    {
        return $this->image;
    }

    public function setImage(?Media $image): self
    {
        $this->image = $image;

        return $this;
    }
}
