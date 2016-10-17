<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Education
 *
 * @ORM\Table(name="Education", indexes={@ORM\Index(name="fk_Education_Organization1_idx", columns={"Organization_id"})})
 * @ORM\Entity
 */
class Education
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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Distinction", inversedBy="education")
     * @ORM\JoinTable(name="education_has_distinction",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Education_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Distinction_id", referencedColumnName="id")
     *   }
     * )
     */
    private $distinction;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Identity", mappedBy="education")
     */
    private $identity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->distinction = new \Doctrine\Common\Collections\ArrayCollection();
        $this->identity = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Education
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
     * @return Education
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
     * @return Education
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
     * @return Education
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
     * @return Education
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
     * Add distinction
     *
     * @param \AppBundle\Entity\Distinction $distinction
     *
     * @return Education
     */
    public function addDistinction(\AppBundle\Entity\Distinction $distinction)
    {
        $this->distinction[] = $distinction;

        return $this;
    }

    /**
     * Remove distinction
     *
     * @param \AppBundle\Entity\Distinction $distinction
     */
    public function removeDistinction(\AppBundle\Entity\Distinction $distinction)
    {
        $this->distinction->removeElement($distinction);
    }

    /**
     * Get distinction
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDistinction()
    {
        return $this->distinction;
    }

    /**
     * Add identity
     *
     * @param \AppBundle\Entity\Identity $identity
     *
     * @return Education
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
