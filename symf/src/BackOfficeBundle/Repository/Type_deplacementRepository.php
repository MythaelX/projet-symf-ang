<?php

namespace BackOfficeBundle\Repository;

/**
 * Type_deplacementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Type_deplacementRepository extends \Doctrine\ORM\EntityRepository
{
  public function getTypeDeplacementRest(){
    return $this->getEntityManager()->createQuery('SELECT i.typeDeplacement FROM BackOfficeBundle:TypeDeplacement i')->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
  }
}
