<?php

namespace BackOfficeBundle\Entity;

/**
 * Type_user
 */
class Type_user
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $typeUser;


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
     * Set typeUser
     *
     * @param string $typeUser
     *
     * @return Type_user
     */
    public function setTypeUser($typeUser)
    {
        $this->typeUser = $typeUser;

        return $this;
    }

    /**
     * Get typeUser
     *
     * @return string
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }
}

