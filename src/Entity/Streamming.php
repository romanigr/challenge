<?php

namespace App\Entity;

use App\Repository\StreammingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ORM\Table(name:"streamming")]
#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorMap(['TvShow'=>TvShow::class,'movie'=>Movie::class])]
abstract class Streamming
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    protected ?string $title = null;

    #[ORM\Column(nullable: true)]
    protected ?int $year = null;

    #[ORM\ManyToOne(targetEntity: Director::class, inversedBy: 'directed')]    
    private Director $director;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): static
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of director
     */ 
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set the value of director
     *
     * @return  self
     */ 
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }
}
