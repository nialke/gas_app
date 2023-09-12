<?php

namespace App\Repository;

use App\Entity\Pipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PipeRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pipe::class);
    }


    /**
     * @return array<Pipe>
     */
    public function findAllSortedByName(): array
    {
        return $this->createQueryBuilder('pipe')
            ->orderBy('pipe.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}