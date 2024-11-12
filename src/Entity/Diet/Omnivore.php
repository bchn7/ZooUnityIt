<?php

namespace App\Entity\Diet;

use App\Entity\Animal;
use App\Interface\MeatMealAcceptorInterface;
use App\Interface\PlantMealAcceptorInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
abstract class Omnivore extends Animal implements MeatMealAcceptorInterface, PlantMealAcceptorInterface
{
    public function acceptMeatMeal(string $meal): void
    {
        echo sprintf("%s zjada mięsny posiłek: %s\n", $this, $meal);
    }

    public function acceptPlantMeal(string $meal): void
    {
        echo sprintf("%s zjada roślinny posiłek: %s\n", $this, $meal);
    }
}
