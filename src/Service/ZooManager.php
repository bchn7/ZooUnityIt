<?php

namespace App\Service;

use App\Entity\Animal;
use App\Interface\FurryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class ZooManager
{
    private EntityManagerInterface $entityManager;
    private EntityRepository $animalRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->animalRepository = $entityManager->getRepository(Animal::class);
    }

    public function addAnimal(Animal $animal): void
    {
        $this->entityManager->persist($animal);
        $this->entityManager->flush();
    }

    public function listAnimals(): string
    {
        $animals = $this->animalRepository->findAll();
        $result = "Zwierzęta w ZOO:\n";

        foreach ($animals as $animal) {
            $result .= sprintf("- %s\n", $animal);
        }

        return $result;
    }

    public function brushFurryAnimals(): string
    {
        $animals = $this->animalRepository->findAll();
        $result = "Czesanie zwierząt z futrem:\n";

        foreach ($animals as $animal) {
            if ($animal instanceof FurryInterface) {
                $result .= $animal->brush();
            }
        }

        return $result;
    }
}