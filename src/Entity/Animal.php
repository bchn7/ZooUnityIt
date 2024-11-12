<?php

namespace App\Entity;

use App\Entity\Species\Elephant;
use App\Entity\Species\Fox;
use App\Entity\Species\Rabbit;
use App\Entity\Species\Rhino;
use App\Entity\Species\SnowLeopard;
use App\Entity\Species\Tiger;
use App\Interface\AnimalInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\InheritanceType("SINGLE_TABLE")]
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap([
    "tiger" => Tiger::class,
    "fox" => Fox::class,
    "elephant" => Elephant::class,
    "rhino" =>  Rhino::class,
    "snowLeopard" => SnowLeopard::class,
    "rabbit" => Rabbit::class
])]
abstract class Animal implements AnimalInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    protected string $name;

    #[ORM\Column(length: 255)]
    protected string $species;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpecies(): string
    {
        return $this->species;
    }

    public function __toString(): string
    {
        return sprintf("%s %s", $this->species, $this->name);
    }
}