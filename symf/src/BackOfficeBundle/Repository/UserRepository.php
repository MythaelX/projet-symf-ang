<?php

namespace BackOfficeBundle\Repository;

/**
 * UserRepository
 *
 * @author Adrien LEBOURGEOIS - Clément EVEN
 * @version 3.1
 * 
 * Doctrine functions for interact with database table "user".
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{

  /**
  * Give number of user by city.
  *
  */
  public function findAllUtilisateurByVille()
    {
      return $this->getEntityManager()->createQuery('Select v.ville ,COUNT(u) nombre_utilisateur FROM BackOfficeBundle:user u INNER JOIN BackOfficeBundle:ville v WITH u.ville = v.id GROUP BY u.ville')->getResult();
    }

  /**
  * Give number of user and kilometer by coperation.
  *
  */
  public function findAllUtilisateurAndKilometreBySociete()
    {
      return $this->getEntityManager()->createQuery('
        Select s.societe,sum(dj.nbKm) nombre_kilometre, COUNT(DISTINCT u.id) nombre_utilisateur
        FROM BackOfficeBundle:DeplacementJour dj, BackOfficeBundle:Deplacement d,BackOfficeBundle:user u,BackOfficeBundle:societe s
        WHERE dj.deplacement=d.id AND d.user=u.id AND s.id=u.societe
        GROUP BY s.id')->getResult();
    }
    //En sql normal :
    // SELECT s.societe,ROUND(sum(dj.nb_km), 2) nombre_kilometre, COUNT(DISTINCT u.id) nombre_utilisateur
    // FROM deplacement_jour dj, deplacement d,user u,societe s
    // WHERE dj.deplacement_id=d.id AND d.user_id=u.id AND s.id=u.societe_id
    // GROUP BY s.id

  /**
  * Give number of kilometer by user per month (in the current year) by coperation.
  *
  */
  public function findKilometreMoisBySocieteAndUtilisateur()
    {
      $annee_en_cour=date("Y",time());
      return $this->getEntityManager()->createQuery('
        Select s.societe,u.nom nom_utilisateur,sum(dj.nbKm) nombre_kilo_utilisateur
        FROM BackOfficeBundle:DeplacementJour dj, BackOfficeBundle:Deplacement d,BackOfficeBundle:user u,BackOfficeBundle:societe s
        WHERE dj.deplacement=d.id AND d.user=u.id AND s.id=u.societe AND d.annee=2018
        GROUP BY u.id 
        ORDER BY s.societe')->getResult();
    }
    //En sql normal :
    //SELECT s.societe,u.nom, sum(dj.nb_km) nombre_kilo_utilisateur
    //FROM deplacement_jour dj, deplacement d,user u,societe s
    //WHERE dj.deplacement_id=d.id AND d.user_id=u.id AND s.id=u.societe_id AND d.annee=2018
    //GROUP BY u.id
    //ORDER BY s.societe
}
