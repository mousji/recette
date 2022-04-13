<?php

namespace App\DataFixtures;

use App\Entity\Al;
use App\Entity\Aliment1;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $a1 = new Al();
        $a1->setNom("Carotte")
            ->setCalorie(36)
            ->setPrix(1.25)
            ->setImage("/aliment/carotte.png")
            ->setProtaine(0.77)
            ->setGlucide(6.45)
            ->setLipide(0.28);

        $manager->persist($a1);

        $a2 = new Al();
        $a2->setNom("patate")
            ->setCalorie(80)
            ->setPrix(2.7)
            ->setImage("/aliment/patate.png")
            ->setProtaine(0.80)
            ->setGlucide(6.90)
            ->setLipide(0.30);

        $manager->persist($a2);



        $a3 = new Al();
        $a3->setNom("pomme")
            ->setCalorie(50)
            ->setPrix(5.3)
            ->setImage("/aliment/pomme.png")
            ->setProtaine(0.35)
            ->setGlucide(6.30)
            ->setLipide(1.30);

        $manager->persist($a3);




        $a4 = new Al();
        $a4->setNom("tomate")
            ->setCalorie(70)
            ->setPrix(2.3)
            ->setImage("/aliment/tomate.png")
            ->setProtaine(0.35)
            ->setGlucide(4.30)
            ->setLipide(2.30);

        $manager->persist($a4);

        $manager->flush();
    }
}