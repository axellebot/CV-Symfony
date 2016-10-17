<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Link
 *
 * @ORM\Table(name="Link", indexes={@ORM\Index(name="fk_Link_LinkType1_idx", columns={"LinkType_id"})})
 * @ORM\Entity
 */
class Link
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
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Linktype
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Linktype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="LinkType_id", referencedColumnName="id")
     * })
     */
    private $linktype;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Identity", mappedBy="link")
     */
    private $identity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Organization", mappedBy="link")
     */
    private $organization;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Realization", mappedBy="link")
     */
    private $realization;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->identity = new \Doctrine\Common\Collections\ArrayCollection();
        $this->organization = new \Doctrine\Common\Collections\ArrayCollection();
        $this->realization = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Link
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
     * Set url
     *
     * @param string $url
     *
     * @return Link
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Link
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
     * Set linktype
     *
     * @param \AppBundle\Entity\Linktype $linktype
     *
     * @return Link
     */
    public function setLinktype(\AppBundle\Entity\Linktype $linktype)
    {
        $this->linktype = $linktype;

        return $this;
    }

    /**
     * Get linktype
     *
     * @return \AppBundle\Entity\Linktype
     */
    public function getLinktype()
    {
        return $this->linktype;
    }

    /**
     * Add identity
     *
     * @param \AppBundle\Entity\Identity $identity
     *
     * @return Link
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

    /**
     * Add organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Link
     */
    public function addOrganization(\AppBundle\Entity\Organization $organization)
    {
        $this->organization[] = $organization;

        return $this;
    }

    /**
     * Remove organization
     *
     * @param \AppBundle\Entity\Organization $organization
     */
    public function removeOrganization(\AppBundle\Entity\Organization $organization)
    {
        $this->organization->removeElement($organization);
    }

    /**
     * Get organization
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Add realization
     *
     * @param \AppBundle\Entity\Realization $realization
     *
     * @return Link
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
