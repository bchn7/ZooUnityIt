<?php

namespace App\Controller;

use App\Entity\Species\Elephant;
use App\Entity\Species\Rabbit;
use App\Entity\Species\Rhino;
use App\Entity\Species\SnowLeopard;
use App\Entity\Species\Tiger;
use App\Entity\Species\Fox;
use App\Service\ZooManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZooController extends AbstractController
{
    #[Route('/zoo', name: 'zoo_index')]
    public function index(ZooManager $zooManager): Response
    {
        $tiger = new Tiger("Leo");
        $fox = new Fox("Rudi");
        $rabbit = new Rabbit("Bandy");
        $elephant = new Elephant("Gregory");
        $rhino = new Rhino("Erwin");
        $snowLeopard = new SnowLeopard("Katty");

        $zooManager->addAnimal($tiger);
        $zooManager->addAnimal($fox);
        $zooManager->addAnimal($rabbit);
        $zooManager->addAnimal($elephant);
        $zooManager->addAnimal($rhino);
        $zooManager->addAnimal($snowLeopard);

        $output = $zooManager->listAnimals();
        $output .= "\n";

        $tiger->acceptMeatMeal("mięso wołowe");
        $fox->acceptMeatMeal("kurczak");
        $fox->acceptPlantMeal("marchewka");
        $rabbit->acceptPlantMeal("marchewka");
        $rhino->acceptPlantMeal("Trawa");
        $snowLeopard->acceptPlantMeal("Trawa");
        $snowLeopard->acceptMeatMeal("Kurczak");

        $output .= "\n" . $zooManager->brushFurryAnimals();

        return new Response('<pre>' . $output . '</pre>');
    }
}