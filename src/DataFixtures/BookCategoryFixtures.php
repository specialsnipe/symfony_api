<?php

namespace App\DataFixtures;

use App\Entity\BookCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookCategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $manager->persist((new BookCategory())->setTitle('Sensory')->setSlug('sensory'));
        $manager->persist((new BookCategory())->setTitle('Iphone')->setSlug('iphone'));
        $manager->persist((new BookCategory())->setTitle('Android')->setSlug('android'));



        $manager->flush();
    }
}
