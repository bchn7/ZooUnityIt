<?php

namespace App\Interface;

interface PlantMealAcceptorInterface
{
    public function acceptPlantMeal(string $meal): void;
}