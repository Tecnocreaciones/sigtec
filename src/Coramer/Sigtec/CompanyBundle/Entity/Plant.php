<?php

namespace Coramer\Sigtec\CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plant
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Plant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80)
     */
    private $email;

    /**
     * @var array
     *
     * @ORM\Column(name="phones", type="array")
     */
    private $phones;

    /**
     * @var string
     *
     * @ORM\Column(name="usePlant", type="text")
     */
    private $usePlant;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="country", type="integer")
     */
    private $country;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer")
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="municipality", type="integer")
     */
    private $municipality;

    /**
     * @var integer
     *
     * @ORM\Column(name="city", type="integer")
     */
    private $city;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="upda", type="datetime")
     */
    private $upda;


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
     * Set email
     *
     * @param string $email
     * @return Plant
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
     * Set phones
     *
     * @param array $phones
     * @return Plant
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;

        return $this;
    }

    /**
     * Get phones
     *
     * @return array 
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Set usePlant
     *
     * @param string $usePlant
     * @return Plant
     */
    public function setUsePlant($usePlant)
    {
        $this->usePlant = $usePlant;

        return $this;
    }

    /**
     * Get usePlant
     *
     * @return string 
     */
    public function getUsePlant()
    {
        return $this->usePlant;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Plant
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set country
     *
     * @param integer $country
     * @return Plant
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return integer 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return Plant
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set municipality
     *
     * @param integer $municipality
     * @return Plant
     */
    public function setMunicipality($municipality)
    {
        $this->municipality = $municipality;

        return $this;
    }

    /**
     * Get municipality
     *
     * @return integer 
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }

    /**
     * Set city
     *
     * @param integer $city
     * @return Plant
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return integer 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Plant
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set upda
     *
     * @param \DateTime $upda
     * @return Plant
     */
    public function setUpda($upda)
    {
        $this->upda = $upda;

        return $this;
    }

    /**
     * Get upda
     *
     * @return \DateTime 
     */
    public function getUpda()
    {
        return $this->upda;
    }
}
