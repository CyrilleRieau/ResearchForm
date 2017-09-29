<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 1; $i < 20; $i++) {
            $product = new Product();
            $product->setRef($i.' Ref '.mt_rand(0, 10000));
            $product->setName('product '.$i);
            $product->setIsEnabled(mt_rand(0, 1));
            $product->setIsPremium(mt_rand(0, 1));
            $product->setNote(mt_rand(0, 5));
            $product->setDescription($product->getName().' '.$i.' is cool');
            $product->setPrice(mt_rand(1, 1000));
            $product->setCreatedAt(new \DateTime('now - '.$i.' hour'));
            $product->setUpdatedAt(new \DateTime('now + '.$i.' minute'));
            $manager->persist($product);
        }
        $manager->flush();
    }
}