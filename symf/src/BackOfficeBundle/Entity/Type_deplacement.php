<?php

namespace BackOfficeBundle\Entity;

/**
 * Type_deplacement
 */
class Type_deplacement
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $typeDeplacement;

    /**
     * @var int
     */
    private $montant;

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
     * Set typeDeplacement
     *
     * @param string $typeDeplacement
     *
     * @return Type_deplacement
     */
    public function setTypeDeplacement($typeDeplacement)
    {
        $this->typeDeplacement = $typeDeplacement;

        return $this;
    }

    /**
     * Get typeDeplacement
     *
     * @return string
     */
    public function getTypeDeplacement()
    {
        return $this->typeDeplacement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Type_deplacement
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Type_deplacement
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
     * @return Type_deplacement
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

