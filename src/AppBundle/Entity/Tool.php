<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tool
 *
 * @ORM\Table(name="Tool")
 * @ORM\Entity
 */
class Tool
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
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Computerskill", mappedBy="tool")
     */
    private $computerskill;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Realization", mappedBy="tool")
     */
    private $realization;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->computerskill = new \Doctrine\Common\Collections\ArrayCollection();
        $this->realization = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tool
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
     * Set description
     *
     * @param string $description
     *
     * @return Tool
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @return Tool
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

    /**
     * Add realization
     *
     * @param \AppBundle\Entity\Realization $realization
     *
     * @return Tool
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
