<?php

namespace App\Entity;

use App\Repository\ChatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChatRepository::class)]
class Chat extends Animal
{
 
    private ?string $couleur;

    public function __construct($espace,$nom,$sexe,$regimeAlim,$couleur){
       parent::__construct($espace,$nom,$sexe,$regimeAlim);
       $this->setCouleur($couleur);
   }

   public function getCouleur()
   {
       return $this->couleur;
   }

   public function setCouleur(string $couleur)
   {
       $this->couleur = $couleur;

   }

    public function cri()
    {
    return " miaouu.";
    }

   
    public function __toString()
    {
        return parent::__toString()." la couleur du chat est : ".$this->getCouleur();
    }

}
