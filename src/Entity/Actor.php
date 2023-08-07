<?php

namespace App\Entity;

use App\Repository\ActorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActorRepository::class)]
#[ORM\InheritanceType('JOINED')]
class Actor extends Person
{

  
}
