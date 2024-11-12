<?php

namespace App\Entity\Species;

use App\Entity\Diet\Herbivore;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Elephant extends Herbivore
{
    protected string $species = "Słoń";

}