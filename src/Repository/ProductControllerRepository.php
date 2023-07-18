<?php

namespace App\Repository;

use App\Entity\ProductController;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductController>
 *
 * @method ProductController|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductController|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductController[]    findAll()
 * @method ProductController[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductControllerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductController::class);
    }

//    /**
//     * @return ProductController[] Returns an array of ProductController objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProductController
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
