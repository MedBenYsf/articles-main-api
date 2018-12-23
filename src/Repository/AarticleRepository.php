<?php

namespace App\Repository;

use App\Entity\Aarticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Aarticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aarticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aarticle[]    findAll()
 * @method Aarticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AarticleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Aarticle::class);
    }

    // /**
    //  * @return Aarticle[] Returns an array of Aarticle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Aarticle
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
