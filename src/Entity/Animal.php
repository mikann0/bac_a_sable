<?php

namespace App\Entity;

// use App\Entity\Espace;
use App\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
   
    private ?Espace $espace;

    private ?string $sexe;

    private ?string $nom;

    private ?Aliment $regimeAlim;


    public function __construct($espace,$nom,$sexe,$regimeAlim){
         $this->setEspace($espace);
         $this->setNom($nom);
         $this->setSexe($sexe);
         $this->setRegimeAlim($regimeAlim);
    }


    public function getEspace(): ?Espace
    {
        return $this->espace;
    }

    public function setEspace(Espace $espace)
    {
        $this->espace = $espace;

    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe)
    {
        $this->sexe = $sexe;

    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

    }

    public function getRegimeAlim() :Aliment
    {
        return $this->regimeAlim;
    }

    public function setRegimeAlim(Aliment $regimeAlim)
    {
        $this->regimeAlim = $regimeAlim;

    }
    
    private function DefinirSexe(){
        $result = "";
        switch($this->getSexe())
        {
            case "M":
                $result = "Male";
                break;
            case "F":
                $result = "Femelle";
                break; 
            default:
                $result = "";
                break;   
        }
        return $result;
    }

    public function __toString()
    {
        return "Le ". $this->getEspace()->getlibelle()." de nom ".$this->getNom()." de sexe ".$this->DefinirSexe()." mange de l'/du " .$this->getRegimeAlim()->getAlimentaire();
    }

}
