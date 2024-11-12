<?php

namespace App\Entity\Species;

use App\Entity\Diet\Herbivore;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Rhino extends Herbivore
{
    protected string $species = "Nosorożec";

}