<?php

namespace App\Application\Sonata\MediaBundle\Entity;

use App\Entity\About;
use App\Entity\Accueil;
use App\Entity\Contact;
use App\Entity\Equipe;
use App\Entity\Partenaire;
use App\Entity\Temoignage;
use Sonata\MediaBundle\Entity\BaseMedia as BaseMedia;

/**
 * This file has been generated by the SonataEasyExtendsBundle.
 *
 * @link https://sonata-project.org/easy-extends
 *
 * References:
 * @link http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 */
class Media extends BaseMedia
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Equipe", mappedBy="image", cascade={"persist", "remove"})
     */
    private $equipe;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\About", mappedBy="banniere1", cascade={"persist", "remove"})
     */
    private $about;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\About", mappedBy="banniere2", cascade={"persist", "remove"})
     */
    private $banniere;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): self
    {
        $this->equipe = $equipe;

        // set (or unset) the owning side of the relation if necessary
        $newImage = $equipe === null ? null : $this;
        if ($newImage !== $equipe->getImage()) {
            $equipe->setImage($newImage);
        }

        return $this;
    }

    public function getAbout(): ?About
    {
        return $this->about;
    }

    public function setAbout(?About $about): self
    {
        $this->about = $about;

        // set (or unset) the owning side of the relation if necessary
        $newBanniere1 = $about === null ? null : $this;
        if ($newBanniere1 !== $about->getBanniere1()) {
            $about->setBanniere1($newBanniere1);
        }

        return $this;
    }

    public function getBanniere(): ?About
    {
        return $this->banniere;
    }

    public function setBanniere(?About $banniere): self
    {
        $this->banniere = $banniere;

        // set (or unset) the owning side of the relation if necessary
        $newBanniere2 = $banniere === null ? null : $this;
        if ($newBanniere2 !== $banniere->getBanniere2()) {
            $banniere->setBanniere2($newBanniere2);
        }

        return $this;
    }


}
