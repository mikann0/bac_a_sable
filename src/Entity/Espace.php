<?php

namespace App\Entity;

use App\Repository\EspaceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EspaceRepository::class)]
class Espace
{
    private ?string $libelle;

    public function __construct($libelle){
        $this->setlibelle($libelle);
        
   }

    public function getlibelle()
    {
        return $this->libelle;
    }

    public function setlibelle(string $libelle)
    {
        $this->libelle = $libelle;

    }
}
