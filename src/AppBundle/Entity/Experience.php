<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="Experience", indexes={@ORM\Index(name="fk_Experience_ExperienceType1_idx", columns={"ExperienceType_id"}), @ORM\Index(name="fk_Experience_Organization1_idx", columns={"Organization_id"})})
 * @ORM\Entity
 */
class Experience
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="date", nullable=false)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="date", nullable=true)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Experiencetype
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Experiencetype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ExperienceType_id", referencedColumnName="id")
     * })
     */
    private $experiencetype;

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
     * Set name
     *
     * @param string $name
     *
     * @return Experience
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Experience
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Experience
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Experience
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
     * Set experiencetype
     *
     * @param \AppBundle\Entity\Experiencetype $experiencetype
     *
     * @return Experience
     */
    public function setExperiencetype(\AppBundle\Entity\Experiencetype $experiencetype)
    {
        $this->experiencetype = $experiencetype;

        return $this;
    }

    /**
     * Get experiencetype
     *
     * @return \AppBundle\Entity\Experiencetype
     */
    public function getExperiencetype()
    {
        return $this->experiencetype;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Experience
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
}
