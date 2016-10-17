<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Identity
 *
 * @ORM\Table(name="Identity", indexes={@ORM\Index(name="fk_Identity_Experience2_idx", columns={"Experience_id"}), @ORM\Index(name="fk_Identity_ComputerSkill1_idx", columns={"ComputerSkill_id"})})
 * @ORM\Entity
 */
class Identity
{
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bornDate", type="date", nullable=true)
     */
    private $borndate;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Computerskill
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Computerskill")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ComputerSkill_id", referencedColumnName="id")
     * })
     */
    private $computerskill;

    /**
     * @var \AppBundle\Entity\Experience
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Experience")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Experience_id", referencedColumnName="id")
     * })
     */
    private $experience;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Distinction", inversedBy="identity")
     * @ORM\JoinTable(name="identity_has_distinction",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Identity_id", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Education", inversedBy="identity")
     * @ORM\JoinTable(name="identity_has_education",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Identity_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Education_id", referencedColumnName="id")
     *   }
     * )
     */
    private $education;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Interest", inversedBy="identity")
     * @ORM\JoinTable(name="identity_has_interest",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Identity_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Interest_id", referencedColumnName="id")
     *   }
     * )
     */
    private $interest;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Link", inversedBy="identity")
     * @ORM\JoinTable(name="identity_has_link",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Identity_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Link_id", referencedColumnName="id")
     *   }
     * )
     */
    private $link;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->distinction = new \Doctrine\Common\Collections\ArrayCollection();
        $this->education = new \Doctrine\Common\Collections\ArrayCollection();
        $this->interest = new \Doctrine\Common\Collections\ArrayCollection();
        $this->link = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Identity
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Identity
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Identity
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
     * Set email
     *
     * @param string $email
     *
     * @return Identity
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Identity
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set borndate
     *
     * @param \DateTime $borndate
     *
     * @return Identity
     */
    public function setBorndate($borndate)
    {
        $this->borndate = $borndate;

        return $this;
    }

    /**
     * Get borndate
     *
     * @return \DateTime
     */
    public function getBorndate()
    {
        return $this->borndate;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Identity
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
     * Set computerskill
     *
     * @param \AppBundle\Entity\Computerskill $computerskill
     *
     * @return Identity
     */
    public function setComputerskill(\AppBundle\Entity\Computerskill $computerskill)
    {
        $this->computerskill = $computerskill;

        return $this;
    }

    /**
     * Get computerskill
     *
     * @return \AppBundle\Entity\Computerskill
     */
    public function getComputerskill()
    {
        return $this->computerskill;
    }

    /**
     * Set experience
     *
     * @param \AppBundle\Entity\Experience $experience
     *
     * @return Identity
     */
    public function setExperience(\AppBundle\Entity\Experience $experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return \AppBundle\Entity\Experience
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Add distinction
     *
     * @param \AppBundle\Entity\Distinction $distinction
     *
     * @return Identity
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
     * Add education
     *
     * @param \AppBundle\Entity\Education $education
     *
     * @return Identity
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
     * Add interest
     *
     * @param \AppBundle\Entity\Interest $interest
     *
     * @return Identity
     */
    public function addInterest(\AppBundle\Entity\Interest $interest)
    {
        $this->interest[] = $interest;

        return $this;
    }

    /**
     * Remove interest
     *
     * @param \AppBundle\Entity\Interest $interest
     */
    public function removeInterest(\AppBundle\Entity\Interest $interest)
    {
        $this->interest->removeElement($interest);
    }

    /**
     * Get interest
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Add link
     *
     * @param \AppBundle\Entity\Link $link
     *
     * @return Identity
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
}
