<?php

namespace BackOfficeBundle\Entity;

/**
 * Deplacement_jour
 */
class Deplacement_jour
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $nbKm;

    /**
     * @var int
     */
    private $montant;

    /**
     * @var int
     */
    private $jour;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbKm
     *
     * @param integer $nbKm
     *
     * @return Deplacement_jour
     */
    public function setNbKm($nbKm)
    {
        $this->nbKm = $nbKm;

        return $this;
    }

    /**
     * Get nbKm
     *
     * @return int
     */
    public function getNbKm()
    {
        return $this->nbKm;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Deplacement_jour
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set jour
     *
     * @param integer $jour
     *
     * @return Deplacement_jour
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return int
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Deplacement_jour
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Deplacement_jour
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Deplacement_jour
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}

