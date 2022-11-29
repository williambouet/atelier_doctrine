<?php

namespace App\DataFixtures;

use App\Entity\Squirrel;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SquirrelFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i <5 ; $i++) { 
            $squirrel = new Squirrel();
            $squirrel->setName('Name ' . $i);

            $manager->persist($squirrel);
        }
        $manager->flush();
    }
}
