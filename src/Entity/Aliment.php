<?php

namespace App\Entity;

use App\Repository\AlimentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlimentRepository::class)]
class Aliment
{
    private ?string $alimentaire;

    public function __construct($alimentaire){
        $this->setAlimentaire($alimentaire);
        
   }

    public function getAlimentaire()
    {
        return $this->alimentaire;
    }

    public function setAlimentaire(string $alimentaire)
    {
        $this->alimentaire = $alimentaire;

    }
}
