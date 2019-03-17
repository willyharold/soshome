<?php

namespace App\Entity;

use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="text")
     */
    private $email;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse;

    /**
     * @ORM\Column(type="text")
     */
    private $live_chat;

    /**
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", inversedBy="contact", cascade={"persist", "remove"})
     */
    private $baniere;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getLiveChat(): ?string
    {
        return $this->live_chat;
    }

    public function setLiveChat(string $live_chat): self
    {
        $this->live_chat = $live_chat;

        return $this;
    }

    public function getBaniere(): ?Media
    {
        return $this->baniere;
    }

    public function setBaniere(?Media $baniere): self
    {
        $this->baniere = $baniere;

        return $this;
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
}
