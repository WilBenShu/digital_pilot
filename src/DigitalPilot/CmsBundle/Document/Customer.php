<?php

namespace DigitalPilot\CmsBundle\Document;


use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="DigitalPilot\CmsBundle\Repository\CustomerRepository")
 */
class Customer 
{

    protected $id;
    protected $name;
    protected $forname;
    protected $email;
    protected $phone;
    protected $portable;
    protected $address;
    protected $company;
    protected $companySize;
    protected $companyAddress;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

}