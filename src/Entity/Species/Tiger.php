<?php

namespace App\Entity\Species;

use App\Entity\Diet\Carnivore;
use App\Interface\FurryInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Tiger extends Carnivore implements FurryInterface
{
    protected string $species = "Tygrys";

    public function brush(): string
    {
        return sprintf("%s został wyczesany\n", $this);
    }
}