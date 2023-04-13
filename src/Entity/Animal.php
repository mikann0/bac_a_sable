<?php

namespace App\Entity;

// use App\Entity\Espece;
use App\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
   
    private ?Espece $espace;

    private ?string $sexe;

    private ?string $nom;

    private ?array $regimeAlim;


    public function __construct($espace,$nom,$sexe,$regimeAlim){
         $this->setEspece($espace);
         $this->setNom($nom);
         $this->setSexe($sexe);
         $this->setRegimeAlim($regimeAlim);
    }


    public function getEspece(): ?Espece
    {
        return $this->espace;
    }

    public function setEspece(Espece $espace)
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

    public function getRegimeAlim() : ?array
    {
        return $this->regimeAlim;
    }

    public function setRegimeAlim(array $regimeAlim)
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

    public function cri()
    {
    return "?";
    }

    public function __toString()
    {
        $result =  "Le ". $this->getEspece()->getlibelle()." de nom ".$this->getNom()." de sexe ".$this->DefinirSexe().". Il a pour cri ".$this->cri()." Il mange ";
     
        if($this->getRegimeAlim() != null){
        foreach($this->getRegimeAlim() as $regimeAlim){
            $result = $result. " ".$regimeAlim->getAlimentaire();
        }
    }
        return $result;
    }

}
