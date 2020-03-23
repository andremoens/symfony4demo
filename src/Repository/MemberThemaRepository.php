<?php
//You can think of a repository as a PHP class whose only job is to help you fetch entities of a certain class.
namespace App\Repository;

use App\Entity\MemberThema;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MemberThema|null find($id, $lockMode = null, $lockVersion = null)
 * @method MemberThema|null findOneBy(array $criteria, array $orderBy = null)
 * @method MemberThema[]    findAll()
 * @method MemberThema[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemberThemaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MemberThema::class);
    }

    // /**
    //  * @return MemberThema[] Returns an array of MemberThema objects
    //  */

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.memberId = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }



    public function findOneBySomeField($value): ?MemberThema
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.memberId = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

}
