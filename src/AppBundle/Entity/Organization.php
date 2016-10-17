<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organization
 *
 * @ORM\Table(name="Organization", indexes={@ORM\Index(name="fk_Organization_OrganizationType1_idx", columns={"OrganizationType_id"})})
 * @ORM\Entity
 */
class Organization
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
     * @var \AppBundle\Entity\Organizationtype
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Organizationtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OrganizationType_id", referencedColumnName="id")
     * })
     */
    private $organizationtype;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Link", inversedBy="organization")
     * @ORM\JoinTable(name="organization_has_link",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Organization_id", referencedColumnName="id")
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
        $this->link = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Organization
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
     * @return Organization
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
     * Set organizationtype
     *
     * @param \AppBundle\Entity\Organizationtype $organizationtype
     *
     * @return Organization
     */
    public function setOrganizationtype(\AppBundle\Entity\Organizationtype $organizationtype)
    {
        $this->organizationtype = $organizationtype;

        return $this;
    }

    /**
     * Get organizationtype
     *
     * @return \AppBundle\Entity\Organizationtype
     */
    public function getOrganizationtype()
    {
        return $this->organizationtype;
    }

    /**
     * Add link
     *
     * @param \AppBundle\Entity\Link $link
     *
     * @return Organization
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
