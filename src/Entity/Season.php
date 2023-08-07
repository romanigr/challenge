<?php

namespace App\Entity;

use App\Repository\SeasonRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Ignore;
use Symfony\Component\Serializer\Annotation\MaxDepth;

#[ORM\Entity(repositoryClass: SeasonRepository::class)]
class Season
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(targetEntity: Episode::class, mappedBy: 'season',cascade:["persist"])]
    private $episodes;

    #[ORM\ManyToOne(targetEntity: TvShow::class, inversedBy: 'seasons',cascade:["persist"])]
    #[Ignore]
    #[MaxDepth(1)]
    private TvShow $tvshow;

    #[ORM\Column]
    private ?int $number = null;
    
    public function __construct()
    {
        $this->episodes = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }    

    /**
     * Get the value of episodes
     */ 
    public function getEpisodes(): Collection
    {
        return $this->episodes;
    }
     
    public function addEpisode(Episode $episode)
    {
        $this->episodes[] = $episode;        
    }

    public function removeEpisode(Episode $episode)
    {
        if ($this->episodes->contains($episode)) {
            $this->episodes->removeElement($episode);
            // set the owning side to null
            if ($episode->getSeason() === $this) {
                $episode->setSeason(null);
            }
        }        
    }

    /**
     * Get the value of tvshow
     */ 
    public function getTvshow()
    {
        return $this->tvshow;
    }

    /**
     * Set the value of tvshow
     *
     * @return  self
     */ 
    public function setTvshow($tvshow)
    {
        $this->tvshow = $tvshow;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
}
