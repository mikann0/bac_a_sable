<?php

namespace App\Entity;

use App\Repository\ChienRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChienRepository::class)]
class Chien extends Animal
{
    public function __construct($espace,$nom,$sexe,$regimeAlim){
        parent::__construct($espace,$nom,$sexe,$regimeAlim);
    }
 

    public function cri()
    {
    return " wan wan.";
    }

}
