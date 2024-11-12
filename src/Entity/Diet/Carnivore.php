<?php

namespace App\Entity\Diet;

use App\Entity\Animal;
use App\Interface\MeatMealAcceptorInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
abstract class Carnivore extends Animal implements MeatMealAcceptorInterface
{
    public function acceptMeatMeal(string $meal): void
    {
        echo sprintf("%s zjada mięsny posiłek: %s\n", $this, $meal);
    }
}