<?php

namespace App\Controller;

//Entyty no Animal.php no namespace kara kiteiru
use App\Entity\Animal;
use App\Entity\Espace;
use App\Entity\Aliment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        //comporte animal dans animal1
        $chien = new Espace("Chien");
        $chat = new Espace("Chat");
        $croquette = new Aliment("Croquette");
        $lait = new Aliment("lait");
        $animal1 = new Animal($chien,"medor","M",$croquette);
        $animal2 = new Animal($chien,"tartantpion","F",$croquette);
        $animal3 = new Animal($chat,"felix","M",$lait);
        $animals = [$animal1,$animal2,$animal3];

        return $this->render('homepage.html.twig', [
            "animals" => $animals
        ]);
    }
}
