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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", inversedBy="banniere2", cascade={"persist", "remove"})
     */
    private $banniere1;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", inversedBy="accueil", cascade={"persist", "remove"})
     */
    private $banniere3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
}
