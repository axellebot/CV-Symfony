<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distinction
 *
 * @ORM\Table(name="Distinction", indexes={@ORM\Index(name="fk_Distinction_DistinctionType1_idx", columns={"DistinctionType_id"})})
 * @ORM\Entity
 */
class Distinction
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
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Distinctiontype
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Distinctiontype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DistinctionType_id", referencedColumnName="id")
     * })
     */
    private $distinctiontype;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Education", mappedBy="distinction")
     */
    private $education;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Identity", mappedBy="distinction")
     */
    private $identity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->education = new \Doctrine\Common\Collections\ArrayCollection();
        $this->identity = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Distinction
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
     * Set id
     *
     * @param string $id
     *
     * @return Distinction
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
     * Set distinctiontype
     *
     * @param \AppBundle\Entity\Distinctiontype $distinctiontype
     *
     * @return Distinction
     */
    public function setDistinctiontype(\AppBundle\Entity\Distinctiontype $distinctiontype)
    {
        $this->distinctiontype = $distinctiontype;

        return $this;
    }

    /**
     * Get distinctiontype
     *
     * @return \AppBundle\Entity\Distinctiontype
     */
    public function getDistinctiontype()
    {
        return $this->distinctiontype;
    }

    /**
     * Add education
     *
     * @param \AppBundle\Entity\Education $education
     *
     * @return Distinction
     */
    public function addEducation(\AppBundle\Entity\Education $education)
    {
        $this->education[] = $education;

        return $this;
    }

    /**
     * Remove education
     *
     * @param \AppBundle\Entity\Education $education
     */
    public function removeEducation(\AppBundle\Entity\Education $education)
    {
        $this->education->removeElement($education);
    }

    /**
     * Get education
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Add identity
     *
     * @param \AppBundle\Entity\Identity $identity
     *
     * @return Distinction
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
