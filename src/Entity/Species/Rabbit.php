<?php

namespace App\Entity\Species;

use App\Entity\Diet\Herbivore;
use App\Interface\FurryInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Rabbit extends Herbivore implements FurryInterface
{
    protected string $species = "Królik";

    public function brush(): string
    {
        return sprintf("%s został wyczesany\n", $this);
    }
}