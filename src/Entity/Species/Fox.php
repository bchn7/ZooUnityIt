<?php

namespace App\Entity\Species;

use App\Entity\Diet\Omnivore;
use App\Interface\FurryInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Fox extends Omnivore implements FurryInterface
{
    protected string $species = "Lis";

    public function brush(): string
    {
        return sprintf("%s został wyczesany\n", $this);
    }
}