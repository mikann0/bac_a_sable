<?php

namespace App\Controller;

//Entyty no Animal.php no namespace kara kiteiru
use App\Entity\Animal;
use App\Entity\Espece;
use App\Entity\Aliment;
use App\Entity\Chat;
use App\Entity\Chien;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        //comporte animal dans animal1
        $chien = new Espece("Chien");
        $chat = new Espece("Chat");

        $ble = new Aliment("blé");
        $croquette = new Aliment("Croquette");
        $lait = new Aliment("lait");
        $pdt = new Aliment("pomme de terre");
        $carotte = new Aliment("carotte");

        $alimentaire_chien = [$ble, $carotte, $pdt];
        $alimentaire_chat = [$lait, $croquette];
        $alimentation_animal = [$ble, $carotte, $pdt, $lait, $croquette];

        $animal1 = new Animal($chien, "medor", "M", $alimentation_animal);
        $animal2 = new Animal($chien, "tartantpion", "F", $alimentation_animal);
        $animal3 = new Animal($chat, "felix", "M", $alimentation_animal);

        $animal4 = new Chat($chat,"felix", "M", $alimentaire_chat,"rouge");
        $animal5 = new Chien($chien,"medor", "M", $alimentaire_chien);

    $animals = [$animal1, $animal2, $animal3, $animal4, $animal5];

        return $this->render('homepage.html.twig', [
            "animals" => $animals
        ]);
    }
}