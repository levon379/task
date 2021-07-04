<?php

namespace App\Repository;

use App\Entity\DepartmentAdmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DepartmentAdmin|null find($id, $lockMode = null, $lockVersion = null)
 * @method DepartmentAdmin|null findOneBy(array $criteria, array $orderBy = null)
 * @method DepartmentAdmin[]    findAll()
 * @method DepartmentAdmin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepartmentAdminRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DepartmentAdmin::class);
    }

    // /**
    //  * @return DepartmentAdmin[] Returns an array of DepartmentAdmin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DepartmentAdmin
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
