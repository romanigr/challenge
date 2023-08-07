<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
#[ORM\InheritanceType('SINGLE_TABLE')]
class Movie extends Streamming
{
    #[ORM\Column]
    private ?string $duration = null;
    
    #[ORM\ManyToMany(targetEntity: Person::class, mappedBy: 'performance')]
    private Collection $actors;

    public function __construct()
    {
        $this->actors = new ArrayCollection();
    }

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */ 
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }


    public function getActors()
    {
        return $this->actors;
    }



    /**
     * Set the value of actors
     *
     * @return  self
     */ 
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }
}
