<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUser
 *
 * @ORM\Table(name="type_user")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\Type_userRepository")
 */
class TypeUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_user", type="string", length=45, nullable=true)
     */
    private $typeUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set typeUser
     *
     * @param string $typeUser
     *
     * @return TypeUser
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

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    public function __toString()
    {
      return $this->typeUser;
    }
}
