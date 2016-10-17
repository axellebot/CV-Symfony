<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programmingdomain
 *
 * @ORM\Table(name="ProgrammingDomain")
 * @ORM\Entity
 */
class Programmingdomain
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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Realization", mappedBy="programmingdomain")
     */
    private $realization;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->realization = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Programmingdomain
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
     * Add realization
     *
     * @param \AppBundle\Entity\Realization $realization
     *
     * @return Programmingdomain
     */
    public function addRealization(\AppBundle\Entity\Realization $realization)
    {
        $this->realization[] = $realization;

        return $this;
    }

    /**
     * Remove realization
     *
     * @param \AppBundle\Entity\Realization $realization
     */
    public function removeRealization(\AppBundle\Entity\Realization $realization)
    {
        $this->realization->removeElement($realization);
    }

    /**
     * Get realization
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRealization()
    {
        return $this->realization;
    }
}
