<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operatingsystem
 *
 * @ORM\Table(name="OperatingSystem")
 * @ORM\Entity
 */
class Operatingsystem
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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Computerskill", mappedBy="operatingsystem")
     */
    private $computerskill;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->computerskill = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Operatingsystem
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
     * Add computerskill
     *
     * @param \AppBundle\Entity\Computerskill $computerskill
     *
     * @return Operatingsystem
     */
    public function addComputerskill(\AppBundle\Entity\Computerskill $computerskill)
    {
        $this->computerskill[] = $computerskill;

        return $this;
    }

    /**
     * Remove computerskill
     *
     * @param \AppBundle\Entity\Computerskill $computerskill
     */
    public function removeComputerskill(\AppBundle\Entity\Computerskill $computerskill)
    {
        $this->computerskill->removeElement($computerskill);
    }

    /**
     * Get computerskill
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComputerskill()
    {
        return $this->computerskill;
    }
}
