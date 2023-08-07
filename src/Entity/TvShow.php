<?php

namespace App\Entity;
use App\Entity\Season;
use App\Repository\TvShowRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
#[ORM\InheritanceType('SINGLE_TABLE')]
class TvShow extends Streamming
{    
    
    #[ORM\OneToMany(targetEntity: Season::class, mappedBy: 'tvshow',cascade:["persist"])]    
    private $seasons;

    public function __construct()
    {
        $this->seasons= new ArrayCollection();        
    }

    /**
     * Get the value of season
     */ 
    public function getSeason()
    {
        return $this->seasons;
    }

    public function addSeason(Season $season)
    {
        $this->seasons[] = $season;        
    }

    public function removeSeason(Season $season)
    {
        if ($this->seasons->contains($season)) {
            $this->seasons->removeElement($season);
            // set the owning side to null
            if ($season->getTvshow() === $this) {
                $season->setTvshow(null);
            }
        }        
    }

}