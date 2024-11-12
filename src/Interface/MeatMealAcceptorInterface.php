<?php

namespace App\Interface;

interface MeatMealAcceptorInterface
{
    public function acceptMeatMeal(string $meal): void;
}