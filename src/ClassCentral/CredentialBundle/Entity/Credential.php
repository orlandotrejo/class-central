<?php

namespace ClassCentral\CredentialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credential
 */
class Credential
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $oneLiner;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var string
     */
    private $pricePeriod;

    /**
     * @var integer
     */
    private $durationMin;

    /**
     * @var integer
     */
    private $durationMax;

    /**
     * @var integer
     */
    private $workloadMin;

    /**
     * @var integer
     */
    private $workloadMax;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * @var \ClassCentral\SiteBundle\Entity\Initiative
     */
    private $initiative;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $institutions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $courses;

    /**
     * @var string
     */
    private $workloadType;


    const CREDENTIAL_PRICE_PERIOD_MONTHLY         = 'M';
    const CREDENTIAL_PRICE_PERIOD_TOTAL           = 'T';
    const CREDENTIAL_WORKLOAD_TYPE_HOURS_PER_WEEK = 'W';
    const CREDENTIAL_WORKLOAD_TYPE_TOTAL_HOURS    = 'T';

    public static $CREDENTIAL_PRICE_PERIODS = array(
        self::CREDENTIAL_PRICE_PERIOD_MONTHLY =>'Monthly',
        self::CREDENTIAL_PRICE_PERIOD_TOTAL => 'Total'
    );

    public static $CREDENTIAL_WORKLOAD = array(
        self::CREDENTIAL_WORKLOAD_TYPE_HOURS_PER_WEEK => 'Hours Per Week',
        self::CREDENTIAL_WORKLOAD_TYPE_TOTAL_HOURS => 'Total Hours',
    );

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->institutions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->created = new \DateTime();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Credential
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
     * Set oneLiner
     *
     * @param string $oneLiner
     * @return Credential
     */
    public function setOneLiner($oneLiner)
    {
        $this->oneLiner = $oneLiner;
    
        return $this;
    }

    /**
     * Get oneLiner
     *
     * @return string 
     */
    public function getOneLiner()
    {
        return $this->oneLiner;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Credential
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set pricePeriod
     *
     * @param string $pricePeriod
     * @return Credential
     */
    public function setPricePeriod($pricePeriod)
    {
        $this->pricePeriod = $pricePeriod;
    
        return $this;
    }

    /**
     * Get pricePeriod
     *
     * @return string 
     */
    public function getPricePeriod()
    {
        return $this->pricePeriod;
    }

    /**
     * Set durationMin
     *
     * @param integer $durationMin
     * @return Credential
     */
    public function setDurationMin($durationMin)
    {
        $this->durationMin = $durationMin;
    
        return $this;
    }

    /**
     * Get durationMin
     *
     * @return integer 
     */
    public function getDurationMin()
    {
        return $this->durationMin;
    }

    /**
     * Set durationMax
     *
     * @param integer $durationMax
     * @return Credential
     */
    public function setDurationMax($durationMax)
    {
        $this->durationMax = $durationMax;
    
        return $this;
    }

    /**
     * Get durationMax
     *
     * @return integer 
     */
    public function getDurationMax()
    {
        return $this->durationMax;
    }

    /**
     * Set workloadMin
     *
     * @param integer $workloadMin
     * @return Credential
     */
    public function setWorkloadMin($workloadMin)
    {
        $this->workloadMin = $workloadMin;
    
        return $this;
    }

    /**
     * Get workloadMin
     *
     * @return integer 
     */
    public function getWorkloadMin()
    {
        return $this->workloadMin;
    }

    /**
     * Set workloadMax
     *
     * @param integer $workloadMax
     * @return Credential
     */
    public function setWorkloadMax($workloadMax)
    {
        $this->workloadMax = $workloadMax;
    
        return $this;
    }

    /**
     * Get workloadMax
     *
     * @return integer 
     */
    public function getWorkloadMax()
    {
        return $this->workloadMax;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Credential
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
     * Set description
     *
     * @param string $description
     * @return Credential
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
     * Set created
     *
     * @param \DateTime $created
     * @return Credential
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Credential
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set initiative
     *
     * @param \ClassCentral\SiteBundle\Entity\Initiative $initiative
     * @return Credential
     */
    public function setInitiative(\ClassCentral\SiteBundle\Entity\Initiative $initiative = null)
    {
        $this->initiative = $initiative;
    
        return $this;
    }

    /**
     * Get initiative
     *
     * @return \ClassCentral\SiteBundle\Entity\Initiative 
     */
    public function getInitiative()
    {
        return $this->initiative;
    }

    /**
     * Add institutions
     *
     * @param \ClassCentral\SiteBundle\Entity\Institution $institutions
     * @return Credential
     */
    public function addInstitution(\ClassCentral\SiteBundle\Entity\Institution $institutions)
    {
        $this->institutions[] = $institutions;
    
        return $this;
    }

    /**
     * Remove institutions
     *
     * @param \ClassCentral\SiteBundle\Entity\Institution $institutions
     */
    public function removeInstitution(\ClassCentral\SiteBundle\Entity\Institution $institutions)
    {
        $this->institutions->removeElement($institutions);
    }

    /**
     * Get institutions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInstitutions()
    {
        return $this->institutions;
    }

    /**
     * Add courses
     *
     * @param \ClassCentral\SiteBundle\Entity\Course $courses
     * @return Credential
     */
    public function addCourse(\ClassCentral\SiteBundle\Entity\Course $courses)
    {
        $this->courses[] = $courses;
    
        return $this;
    }

    /**
     * Remove courses
     *
     * @param \ClassCentral\SiteBundle\Entity\Course $courses
     */
    public function removeCourse(\ClassCentral\SiteBundle\Entity\Course $courses)
    {
        $this->courses->removeElement($courses);
    }

    /**
     * Get courses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * Set workloadType
     *
     * @param string $workloadType
     * @return Credential
     */
    public function setWorkloadType($workloadType)
    {
        $this->workloadType = $workloadType;
    
        return $this;
    }

    /**
     * Get workloadType
     *
     * @return string 
     */
    public function getWorkloadType()
    {
        return $this->workloadType;
    }
}