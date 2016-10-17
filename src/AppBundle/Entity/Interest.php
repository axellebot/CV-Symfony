<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interest
 *
 * @ORM\Table(name="Interest")
 * @ORM\Entity
 */
class Interest
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Identity", mappedBy="interest")
     */
    private $identity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->identity = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Interest
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add identity
     *
     * @param \AppBundle\Entity\Identity $identity
     *
     * @return Interest
     */
    public function addIdentity(\AppBundle\Entity\Identity $identity)
    {
        $this->identity[] = $identity;

        return $this;
    }

    /**
     * Remove identity
     *
     * @param \AppBundle\Entity\Identity $identity
     */
    public function removeIdentity(\AppBundle\Entity\Identity $identity)
    {
        $this->identity->removeElement($identity);
    }

    /**
     * Get identity
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdentity()
    {
        return $this->identity;
    }
}
