<?php

namespace App\Entity;

use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AboutRepository")
 */
class About
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionEN;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionFR;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media",  cascade={"persist", "remove"})
     */
    private $banniere1;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media",  cascade={"persist", "remove"})
     */
    private $banniere3;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", cascade={"persist", "remove"})
     */
    private $banniere2;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", cascade={"persist", "remove"})
     */
    private $banniere4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionEN(): ?string
    {
        return $this->descriptionEN;
    }

    public function setDescriptionEN(string $descriptionEN): self
    {
        $this->descriptionEN = $descriptionEN;

        return $this;
    }

    public function getDescriptionFR(): ?string
    {
        return $this->descriptionFR;
    }

    public function setDescriptionFR(string $descriptionFR): self
    {
        $this->descriptionFR = $descriptionFR;

        return $this;
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

    public function getBanniere3(): ?Media
    {
        return $this->banniere3;
    }

    public function setBanniere3(?Media $banniere3): self
    {
        $this->banniere3 = $banniere3;

        return $this;
    }

    public function getBanniere2(): ?Media
    {
        return $this->banniere2;
    }

    public function setBanniere2(?Media $banniere2): self
    {
        $this->banniere2 = $banniere2;

        return $this;
    }

    public function getBanniere4(): ?Media
    {
        return $this->banniere4;
    }

    public function setBanniere4(?Media $banniere4): self
    {
        $this->banniere4 = $banniere4;

        return $this;
    }
}
