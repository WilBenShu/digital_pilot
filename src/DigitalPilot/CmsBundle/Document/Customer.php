<?php

namespace DigitalPilot\CmsBundle\Document;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="DigitalPilot\CmsBundle\Repository\CustomerRepository")
 */
class Customer
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @Assert\NotBlank()
     *
     * @MongoDB\String
     */
    protected $firstName;

    /**
     * @Assert\NotBlank()
     *
     * @MongoDB\String
     */
    protected $lastName;

    /**
     * @Assert\NotBlank()
     *
     * @MongoDB\String
     */
    protected $age;

    /**
     * @Assert\NotBlank()
     *
     * @MongoDB\String
     */
    protected $sexe;

    /**
     * @Assert\Email(message="L'email '{{ value }}' n'est pas valide.", checkMX = true)
     *
     * @MongoDB\String
     */
    protected $email;

    /**
     * @MongoDB\String
     */
    protected $phone;

    /**
     * @Assert\NotBlank()
     *
     * @MongoDB\String
     */
    protected $country;

    public function __construct()
    {
        //parent::__construct();
        // your own logic
    }
    
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Get age
     *
     * @return string $age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return self
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string $sexe
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }
}
