<?php

namespace App\Entity\Diet;

use App\Entity\Animal;
use App\Interface\PlantMealAcceptorInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
abstract class Herbivore extends Animal implements PlantMealAcceptorInterface
{
    public function acceptPlantMeal(string $meal): void
    {
        echo sprintf("%s zjada roślinny posiłek: %s\n", $this, $meal);
    }
}