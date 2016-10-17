<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realization
 *
 * @ORM\Table(name="Realization", indexes={@ORM\Index(name="fk_Realization_Organization1_idx", columns={"Organization_id"})})
 * @ORM\Entity
 */
class Realization
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Organization
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Organization")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Organization_id", referencedColumnName="id")
     * })
     */
    private $organization;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Link", inversedBy="realization")
     * @ORM\JoinTable(name="realization_has_link",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Realization_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Link_id", referencedColumnName="id")
     *   }
     * )
     */
    private $link;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Programmingdomain", inversedBy="realization")
     * @ORM\JoinTable(name="realization_has_programmingdomain",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Realization_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ProgrammingDomain_id", referencedColumnName="id")
     *   }
     * )
     */
    private $programmingdomain;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Programminglanguage", inversedBy="realization")
     * @ORM\JoinTable(name="realization_has_programminglanguage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Realization_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ProgrammingLanguage_id", referencedColumnName="id")
     *   }
     * )
     */
    private $programminglanguage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Tool", inversedBy="realization")
     * @ORM\JoinTable(name="realization_has_tool",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Realization_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Tool_id", referencedColumnName="id")
     *   }
     * )
     */
    private $tool;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->link = new \Doctrine\Common\Collections\ArrayCollection();
        $this->programmingdomain = new \Doctrine\Common\Collections\ArrayCollection();
        $this->programminglanguage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tool = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Realization
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
     * @return Realization
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Realization
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
     * Set id
     *
     * @param string $id
     *
     * @return Realization
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Realization
     */
    public function setOrganization(\AppBundle\Entity\Organization $organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return \AppBundle\Entity\Organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Add link
     *
     * @param \AppBundle\Entity\Link $link
     *
     * @return Realization
     */
    public function addLink(\AppBundle\Entity\Link $link)
    {
        $this->link[] = $link;

        return $this;
    }

    /**
     * Remove link
     *
     * @param \AppBundle\Entity\Link $link
     */
    public function removeLink(\AppBundle\Entity\Link $link)
    {
        $this->link->removeElement($link);
    }

    /**
     * Get link
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Add programmingdomain
     *
     * @param \AppBundle\Entity\Programmingdomain $programmingdomain
     *
     * @return Realization
     */
    public function addProgrammingdomain(\AppBundle\Entity\Programmingdomain $programmingdomain)
    {
        $this->programmingdomain[] = $programmingdomain;

        return $this;
    }

    /**
     * Remove programmingdomain
     *
     * @param \AppBundle\Entity\Programmingdomain $programmingdomain
     */
    public function removeProgrammingdomain(\AppBundle\Entity\Programmingdomain $programmingdomain)
    {
        $this->programmingdomain->removeElement($programmingdomain);
    }

    /**
     * Get programmingdomain
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProgrammingdomain()
    {
        return $this->programmingdomain;
    }

    /**
     * Add programminglanguage
     *
     * @param \AppBundle\Entity\Programminglanguage $programminglanguage
     *
     * @return Realization
     */
    public function addProgramminglanguage(\AppBundle\Entity\Programminglanguage $programminglanguage)
    {
        $this->programminglanguage[] = $programminglanguage;

        return $this;
    }

    /**
     * Remove programminglanguage
     *
     * @param \AppBundle\Entity\Programminglanguage $programminglanguage
     */
    public function removeProgramminglanguage(\AppBundle\Entity\Programminglanguage $programminglanguage)
    {
        $this->programminglanguage->removeElement($programminglanguage);
    }

    /**
     * Get programminglanguage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProgramminglanguage()
    {
        return $this->programminglanguage;
    }

    /**
     * Add tool
     *
     * @param \AppBundle\Entity\Tool $tool
     *
     * @return Realization
     */
    public function addTool(\AppBundle\Entity\Tool $tool)
    {
        $this->tool[] = $tool;

        return $this;
    }

    /**
     * Remove tool
     *
     * @param \AppBundle\Entity\Tool $tool
     */
    public function removeTool(\AppBundle\Entity\Tool $tool)
    {
        $this->tool->removeElement($tool);
    }

    /**
     * Get tool
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTool()
    {
        return $this->tool;
    }
}
