<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Computerskill
 *
 * @ORM\Table(name="ComputerSkill")
 * @ORM\Entity
 */
class Computerskill
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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Language", inversedBy="computerskill")
     * @ORM\JoinTable(name="computerskill_has_language",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ComputerSkill_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Language_id", referencedColumnName="id")
     *   }
     * )
     */
    private $language;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Operatingsystem", inversedBy="computerskill")
     * @ORM\JoinTable(name="computerskill_has_operatingsystem",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ComputerSkill_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="OperatingSystem_id", referencedColumnName="id")
     *   }
     * )
     */
    private $operatingsystem;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Programminglanguage", inversedBy="computerskill")
     * @ORM\JoinTable(name="computerskill_has_programminglanguage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ComputerSkill_id", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Software", inversedBy="computerskill")
     * @ORM\JoinTable(name="computerskill_has_software",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ComputerSkill_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Software_id", referencedColumnName="id")
     *   }
     * )
     */
    private $software;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Tool", inversedBy="computerskill")
     * @ORM\JoinTable(name="computerskill_has_tool",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ComputerSkill_id", referencedColumnName="id")
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
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
        $this->operatingsystem = new \Doctrine\Common\Collections\ArrayCollection();
        $this->programminglanguage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->software = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tool = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Computerskill
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
     * Add language
     *
     * @param \AppBundle\Entity\Language $language
     *
     * @return Computerskill
     */
    public function addLanguage(\AppBundle\Entity\Language $language)
    {
        $this->language[] = $language;

        return $this;
    }

    /**
     * Remove language
     *
     * @param \AppBundle\Entity\Language $language
     */
    public function removeLanguage(\AppBundle\Entity\Language $language)
    {
        $this->language->removeElement($language);
    }

    /**
     * Get language
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Add operatingsystem
     *
     * @param \AppBundle\Entity\Operatingsystem $operatingsystem
     *
     * @return Computerskill
     */
    public function addOperatingsystem(\AppBundle\Entity\Operatingsystem $operatingsystem)
    {
        $this->operatingsystem[] = $operatingsystem;

        return $this;
    }

    /**
     * Remove operatingsystem
     *
     * @param \AppBundle\Entity\Operatingsystem $operatingsystem
     */
    public function removeOperatingsystem(\AppBundle\Entity\Operatingsystem $operatingsystem)
    {
        $this->operatingsystem->removeElement($operatingsystem);
    }

    /**
     * Get operatingsystem
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOperatingsystem()
    {
        return $this->operatingsystem;
    }

    /**
     * Add programminglanguage
     *
     * @param \AppBundle\Entity\Programminglanguage $programminglanguage
     *
     * @return Computerskill
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
     * Add software
     *
     * @param \AppBundle\Entity\Software $software
     *
     * @return Computerskill
     */
    public function addSoftware(\AppBundle\Entity\Software $software)
    {
        $this->software[] = $software;

        return $this;
    }

    /**
     * Remove software
     *
     * @param \AppBundle\Entity\Software $software
     */
    public function removeSoftware(\AppBundle\Entity\Software $software)
    {
        $this->software->removeElement($software);
    }

    /**
     * Get software
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Add tool
     *
     * @param \AppBundle\Entity\Tool $tool
     *
     * @return Computerskill
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
