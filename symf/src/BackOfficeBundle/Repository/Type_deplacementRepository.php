<?php

namespace BackOfficeBundle\Repository;

/**
 * Type_deplacementRepository
 *
 * @author Adrien LEBOURGEOIS - Clément EVEN
 * @version 3.1
 * 
 * Doctrine functions for interact with database table "type_deplacement".
 */
class Type_deplacementRepository extends \Doctrine\ORM\EntityRepository
{
  public function getTypeDeplacementRest(){
    return $this->getEntityManager()->createQuery('SELECT i.typeDeplacement FROM BackOfficeBundle:TypeDeplacement i')->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
  }
}
