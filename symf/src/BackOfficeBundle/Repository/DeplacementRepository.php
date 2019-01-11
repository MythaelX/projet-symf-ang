<?php

namespace BackOfficeBundle\Repository;

/**
 * DeplacementRepository
 *
 * @author Adrien LEBOURGEOIS - Clément EVEN
 * @version 3.1
 * 
 * Doctrine functions for interact with database table "deplacement".
 */
class DeplacementRepository extends \Doctrine\ORM\EntityRepository{

  /**
   * Return all "deplacements".
   *
   */
  public function allDeplacementsRest(){
    return $this->getEntityManager()->createQuery('SELECT i, u.id, u.nom, u.prenom FROM BackOfficeBundle:Deplacement i LEFT JOIN BackOfficeBundle:User u WITH i.user = u.id')->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
  }

  /**
     * Return all "deplacements" for one user "id" passed as a parameter.
     *
     */
  public function deplacementsForOneUserRest($id){
    return $this->getEntityManager()->createQuery('SELECT i FROM BackOfficeBundle:Deplacement i WHERE i.user = '.$id.' ORDER BY i.annee, i.mois')->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
  }

  /**
     * Return "prenom" and "nom" for one user "id" passed as a parameter.
     *
     */
  public function getUserRest($id){
    return $this->getEntityManager()->createQuery('SELECT i.nom, i.prenom FROM BackOfficeBundle:User i WHERE i.id = '.$id)->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
  }

  /**
     * Return details ("deplacement_jour") for one "deplacement" (id of the "user", year and month) passed as a parameter .
     *
     */
  public function getDeplacementDetailsRest($userId, $year, $month){
    return $this->getEntityManager()->createQuery('SELECT dj FROM BackOfficeBundle:DeplacementJour dj INNER JOIN BackOfficeBundle:Deplacement d WITH dj.deplacement = d WHERE d.user = '. $userId .' AND d.annee = '. $year .' AND d.mois = '. $month.'')->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
  }
}
