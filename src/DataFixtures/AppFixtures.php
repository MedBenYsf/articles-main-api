<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Fidry\AliceDataFixtures\LoaderInterface;

class AppFixtures extends Fixture
{
	private $loader;

	const FILES = [
    __dir__.'/fixtures/articles.yaml',
    __dir__.'/fixtures/author.yaml',
    __dir__.'/fixtures/categorie.yaml',
	];

	public function __construct(LoaderInterface $loader)
	{
		$this->loader = $loader;
	}

    public function load(ObjectManager $manager)
    {
    	$objects = $this->loader->load(self::FILES);

    	foreach ($objects as $value) {
    		$manager->persist($value);
    	}
        $manager->flush();
    }
}
