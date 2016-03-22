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
     * @MongoDB\String
     */
    protected $portable;
    
    /**
     * @Assert\NotBlank()
     *
     * @MongoDB\String
     */
    protected $address;
    
    /**
     * @Assert\NotBlank()
     *
     * @MongoDB\String
     */
    protected $company;
    
    /**
     * @MongoDB\String
     */
    protected $companySize;
    
    /**
     * @MongoDB\String
     */
    protected $companyAddress;

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
     * Set portable
     *
     * @param string $portable
     * @return self
     */
    public function setPortable($portable)
    {
        $this->portable = $portable;
        return $this;
    }

    /**
     * Get portable
     *
     * @return string $portable
     */
    public function getPortable()
    {
        return $this->portable;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * Get company
     *
     * @return string $company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set companySize
     *
     * @param string $companySize
     * @return self
     */
    public function setCompanySize($companySize)
    {
        $this->companySize = $companySize;
        return $this;
    }

    /**
     * Get companySize
     *
     * @return string $companySize
     */
    public function getCompanySize()
    {
        return $this->companySize;
    }

    /**
     * Set companyAddress
     *
     * @param string $companyAddress
     * @return self
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->companyAddress = $companyAddress;
        return $this;
    }

    /**
     * Get companyAddress
     *
     * @return string $companyAddress
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }
}
