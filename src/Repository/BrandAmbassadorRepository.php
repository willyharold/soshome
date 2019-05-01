<?php

namespace App\Repository;

use App\Entity\BrandAmbassador;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BrandAmbassador|null find($id, $lockMode = null, $lockVersion = null)
 * @method BrandAmbassador|null findOneBy(array $criteria, array $orderBy = null)
 * @method BrandAmbassador[]    findAll()
 * @method BrandAmbassador[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrandAmbassadorRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BrandAmbassador::class);
    }

    // /**
    //  * @return BrandAmbassador[] Returns an array of BrandAmbassador objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BrandAmbassador
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
