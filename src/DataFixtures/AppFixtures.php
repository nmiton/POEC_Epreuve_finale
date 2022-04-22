<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $category1 = new Category();
        $category1->setName("Hardcore");
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName("Techno");
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName("Minimal");
        $manager->persist($category3);

        $category4 = new Category();
        $category4->setName("Drum&Bass");
        $manager->persist($category4);

        $article = new Article();
        $article->setTitre("Article 1");
        $article->setContenu("https://soundcloud.com/leksmusiclive/newlivextractflp");
        $article->setCategory($category1);
        $manager->persist($article);

        $article = new Article();
        $article->setTitre("Article 2");
        $article->setContenu("https://soundcloud.com/kirilkiril/kiril-whoop");
        $article->setCategory($category4);
        $manager->persist($article);

        $manager->flush();
    }
}
